<?php

namespace App\Http\Controllers;

use App\Models\AuthorProfile;
use App\Models\ReadList;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getUser()
    {
        return view(
            "user.user-profile",
        );
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
            "phoneNumber" => ["required", "max:20"]
        ]);
        $user->update($cleanData);
        return redirect("/user-profile/" . $user->username)->with("success", "Successfully Updated !");
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
}
