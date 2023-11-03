<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getUser()
    {
        return view(
            "components.user-profile",
        );
    }

    public function getPrice()
    {
        return view("components.pricing-section");
    }

    public function getUpdate()
    {
        return view("components.update-user");
    }

    public function update(User $user)
    {
        $cleanData = request()->validate([
            "name" => ["required", "max:20"],
            "username" => ["required", "max:20", auth()->user()->username == request("username") ? "" :  Rule::unique("users", "username")],
            "email" => ["required", "max:20", auth()->user()->email == request("email") ? "" :  Rule::unique("users", "email")],
            "phoneNumber" => ["required", "max:20"]
        ]);
        $user->update($cleanData);
        return redirect("/user-profile/" . $user->username)->with("success", "Successfully Updated !");
    }
}
