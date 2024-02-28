<?php

namespace App\Http\Controllers;

use App\Mail\InviteMail;
use App\Models\Archive;
use App\Models\AuthorProfile;
use App\Models\Notification;
use App\Models\ReadList;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //
    public function getUser()
    {
        return view(
            "user.user-profile",
        );
    }


    public function showUser(User $user)
    {
        // dd($user);
        return view("user.public-profile", ["user" => $user]);
    }


    public function getUpdate()
    {
        return view("user.update-user");
    }

    public function update(User $user)
    {
        $cleanData = request()->validate([
            "name" => ["required", "max:20"],
            "username" => ["required", "max:20", auth()->user()->username == request("username") ? "" : Rule::unique("users", "username")],
            "email" => ["required", "max:20", auth()->user()->email == request("email") ? "" : Rule::unique("users", "email")],
            "phoneNumber" => ["required", "max:20"],
            "about" => ["required"],
            "imageUrl" => ["image"]
        ]);



       
        if ($file = request("imageUrl")) {
            if ($path = public_path($user->imageUrl)) {
                File::delete($path);
            }
            $user->imageUrl = '/storage/' . $file->store('/users');
        }



        if ($user->role === 0) {
            $user->reader->about = $cleanData["about"];
            $user->reader->update();
        } else {
            $user->author->about = $cleanData["about"];
            // dd($user->author);
            $user->author->name = $cleanData["name"];
            $user->author->update();
        }
        $user->name = $cleanData["name"];
        $user->email = $cleanData["email"];
        $user->phoneNumber = $cleanData["phoneNumber"];
        $user->update();

        return redirect("/user-profile/" . $user->username)->with("success", "Successfully Updated !");
    }

    public function changeBackground(User $user)
    {
        if ($file = request("image")) {
            if ($path = public_path($user->background)) {
                File::delete($path);
            }
            $user->background = '/storage/' . $file->store('/backgrounds');
        }
        $user->save();
        return back()->with("success", "Successfully Updated !");
    }

    public function purchased(User $user)
    {
        return view("book.purchased", [
            "books" => $user->boughtBooks()->latest()->get()
        ]);
    }

    public function readList()
    {
        return view("book.readlist", [
            "readlists" => ReadList::where("user_id", auth()->id())->latest()->paginate(10)
        ]);
    }

    public function buycoin(User $user)
    {
        $cleanData = request()->validate([
            "amount" => ["required", "max:20"]
        ]);


        $user->ggcoin += $cleanData["amount"] / 10;
        $user->update();

        return redirect("/user-profile/" . $user->username);
    }


    public function following()
    {
        return view("user.following");
    }

    public function showFollowing(User $user)
    {
        return view("user.public-follow", ["user" => $user]);
    }

    public function notification()
    {
        $notifications = Notification::where("recipient_id",  auth()->id())->latest()->get();
        return view("user.notification", ["notifications" => $notifications]);
    }

    public function library()
    {
        $books = auth()->user()->boughtBooks()->latest()->get();


        return view("user.library", [
            "books" => $books,

        ]);
    }

    public function archive()
    {
        $archives = Archive::where("user_id", auth()->user()->id)->latest()->get();
        // $archives = auth()->user()->archive()->latest()->get();


        // dd($archives);
        return view("user.archive", [
            "archives" => $archives,
        ]);
    }

    public function deleteArchive(Archive $archive)
    {
        $archive->delete();
        $archive->book->isArchive = false;
        $archive->book->update();
        // $book->archive = true;
        // $book->update();

        return back()->with("success", "Successfully Archived Removed ✅");
    }

    public function invite(User $user)
    {
        $cleanData = request()->validate([
            "email" => ["required"]
        ]);

        Mail::to($cleanData["email"])->queue(new InviteMail($user->name));

        return back()->with("success", "Successfully sent ✅");
    }
}
