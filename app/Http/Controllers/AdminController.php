<?php

namespace App\Http\Controllers;

use App\Mail\BookConfirmMail;
use App\Mail\BookDeleteMail;
use App\Mail\CoinConfirm;
use App\Mail\ConfirmAuthorMail;
use App\Models\AdminHistory;
use App\Models\AuthorProfile;
use App\Models\AuthorRegister;
use App\Models\Book;
use App\Models\Genres;
use App\Models\Notification;
use App\Models\Sells;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view("admin.index", [
            "users" => User::whereIn("role", [0, 2])->latest()->limit(10)->get(),
            "books" => Book::where("publish", true)->get(),
            "histories" => AdminHistory::limit(5)->latest()->get(),
            "incomes" => AdminHistory::where('status', 'income')->sum('ggcoin'),
            "outcomes" => AdminHistory::where('status', 'outcome')->sum('ggcoin'),
            "requsers" => AuthorRegister::where("status", "pending")->get()
        ]);
    }


    public function users()
    {
        $ROLE = ["user" => [0], "author" => [2], "all" => [0, 2], "" => [0, 2]];
        $filter = $ROLE[request("filter")];
        return view("admin.users", [
            "users" => User::whereIn("role", $filter)->latest()->paginate(10)
        ]);
    }

    public function user(User $user)
    {

        return view("admin.profile", [
            "user" => $user,
            "genres" => Genres::whereIn("id", explode(",", $user->reader?->genres))->get()
        ]);
    }

    public function updateUser(User $user)
    {
        $clean_data = request()->validate([
            "name" => ["required"],
            "username" => ["required"],
            "email" => ["required"],
            "role" => ["required"],
            "ggcoin" => ["required"],
            "phoneNumber" => ["required"]
        ]);


        if ($user->role === 0 && $clean_data["role"] == 2) {
            $user->role = 2;

            AuthorProfile::create(["name" => $user->name, "id" => $user->id, "user_id" => $user->id, "about" => $user->reader->about, "experience" => 0]);
        }

        $user->update($clean_data);


        return back()->with("success", "Successfully Edited Chief🪲 ✅.");
    }


    public function deleteUser(User $user)
    {
        $user->delete();
        return back()->with("success", "Successfully Deleted Chief🪲 ✅.");
    }


    public function reqAuthor()
    {

        $status = request("filter") ?? "all";

        $user = AuthorRegister::where("status", $status)->get();

        if ($status === "all") {
            $user = AuthorRegister::orderBy("status", "DESC")->get();
        }

        return view("admin.request-authors", [
            "users" => $user
        ]);
    }

    public function successRegAuthor(AuthorRegister $requser)
    {
        $requser->status = "success";
        $requser->confirm = 1;

        $requser->user->role = 2;

        $requser->update();
        $requser->user->update();
        AuthorProfile::create(["name" => $requser->user->name, "id" => $requser->user->id, "user_id" => $requser->user->id, "about" => $requser->about, "description" => $requser->description]);

        Mail::to($requser->user->email)->queue(new ConfirmAuthorMail($requser->user->name));
        return redirect("/admin/authors/request"); // cheange redirect back later
    }


    public function denyRegAuthor(AuthorRegister $requser)
    {

        $requser->status = "denied";
        $requser->confirm = 0;
        $requser->user->role = 0;
        $requser->update();
        $requser->user->update();


        $requser->user->author->delete();
        return redirect("/admin/authors/request"); // cheange redirect back later
    }

    public function coinsBuy()
    {
        
        return view("admin.coin-buy", [
            "transfers" => Transfer::all(),
          
        ]);
    }

    public function coinsSell()
    {

        return view("admin.coin-sell", [
            "sells" => Sells::all(),
            "limit" => Setting::where("id",  1)->first()->limit_coin

        ]);
    }

    public function coinsConfirm(Transfer $transfer)
    {
        $transfer->user->ggcoin += $transfer->ggcoin;
        $transfer->user->update();
        AdminHistory::create([
            "user_id" => $transfer->user->id,
            "ggcoin" => $transfer->ggcoin,
            "status" => "Income"
        ]);

        Notification::create([
            "about" => "confrim your coin request ",
            "user_id" => auth()->user()->id,
            "recipient_id" => $transfer->user->id
        ]);

        $transfer->delete();
        Mail::to($transfer->user->email)->queue(new CoinConfirm($transfer->user->name, $transfer->user->ggcoin));
        return back()->with("success", "Successfully transfered Chief🪲 ✅.");
    }


    public function coinsDelete(Transfer $transfer)
    {
        $transfer->delete();
        return back()->with("success", "Successfully deleted Chief🪲 ✅.");
    }

    public function genres()
    {
        return view("admin.genres", ["genres" => Genres::latest()->get()]);
    }

    public function postGenres()
    {
        $clean_data = request()->validate([
            "name" => ["required"],
            "about" => ["required"],
            "image" => ["required", "image"],
        ]);
        $clean_data["image"] = "/storage/" . request("image")->store("/genres");
        Genres::create([
            "name" => $clean_data["name"],
            "about" => $clean_data["about"],
            "image" => $clean_data["image"],
            "slug" => fake()->slug()

        ]);


        return back()->with("success", "New Genres Successfully Added Chief🪲 ✅.");;
    }

    public function editGenres(Genres $genres)
    {


        $clean_data = request()->validate([
            "name" => ["required"],
            "about" => ["required"],
            "image" => ["", "image"],
        ]);

        $genres->name = $clean_data["name"];
        $genres->about = $clean_data["about"];

        if ($file = request("image")) {
            if ($path = public_path($genres->image)) {
                File::delete($path);
            }
            $genres->image = '/storage/' . $file->store('/genres');
        }

        $genres->update();

        return back()->with("success", "Genres Successfully Updated  Chief🪲 ✅.");
    }

    public function deleteGenres(Genres $genres)
    {
        $genres->delete();
        return back()->with("success", "Genres Successfully Deleted  Chief🪲 ✅.");
    }

    public function tags()
    {
        return view("admin.tags");
    }

    public function postTags()
    {
        Tag::create([
            "name" => request("name"),
        ]);
        return back()->with("success", "New Genres Successfully Added Chief🪲 ✅.");
    }


    public function books()
    {
        // $ROLE = ["free" => [0], "author" => [2], "all" => [0, 2], "" => [0, 2]];
        $book = Book::with(["user"])->filter(request(["status", "search", "author", "price", "id"]));
        $bookQuery = $book->where('isRequested', true)->orderBy("created_at", "DESC");
        $bookQuery = $bookQuery->latest()->paginate(10)->withQueryString();


        return view("admin.books", ["books" => $bookQuery]);
    }

    public function deleteBook(Book $book)
    {

        $delete =  $book->delete();
        if ($delete)
            Mail::to($book->user->email)->queue(new BookDeleteMail($book->title, $book->user->name));

        return back()->with("success", "Successfully Deleted Chief🪲 ✅.");
    }

    public function setting()
    {
        $setting = Setting::first();
        return view("admin.setting", ["setting" => $setting]);
    }

    public function updateSetting()
    {
        $setting = Setting::where("id", 1)->first();
        $clean_data = request()->validate([
            "coin_price" => ["required"],
            "limit_author" => ["required"],
            "limit_coin" => ["required"],
            "limit_rating" => ["required"]
        ]);
        $setting->update($clean_data);
        return back()->with("success", "Successfully Updated Chief🪲 ✅.");
    }

    public function adminSetting()
    {
        return view("admin.adminSetting");
    }
    public function updateAdminSetting(User $admin)
    {
        $clean_data = request()->validate([
            "email" => ["required", "min:3"],
            "name" => ["required", "min:3"],
            "username" => ["required"],
            "password" => [""],
        ]);

        $admin->name = $clean_data["name"];
        $admin->username = $clean_data["username"];
        $admin->email = $clean_data["email"];
        $admin->update();

        return back()->with("success", "Successfully Updated Chief🪲 ✅.");
    }


    public function publishConfirm(Book $book)
    {
        $book->isPublished = true;
        // $book->isRequested = false;
        $book->save();
        $subscribers = $book->user->author->subscribers;
        foreach ($subscribers as $subscriber) {
            Notification::create([
                "about" => "create new book",
                "book_id" => $book->id,
                "user_id" => $book->user_id,
                "recipient_id" => $subscriber->id
            ]);
        }

        Notification::create([
            "about" => "confrim your book " . $book->title,
            "book_id" => $book->id,
            "user_id" => auth()->user()->id,
            "recipient_id" => $book->user->id
        ]);

        Mail::to($book->user->email)->queue(new BookConfirmMail($book->user->name));


        return back()->with("success", "Successfully Updated Chief🪲 ✅.");
    }
}
