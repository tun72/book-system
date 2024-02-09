<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //
    public function viewLogin()
    {
        return view("auth.login");
    }

    public function viewRegister()
    {
        return view("auth.register");
    }

    public function register()
    {
        $cleanData = request()->validate([
            "name" => ["required", "max:20", "min:5"],
            "username" => ["required", "max:10", Rule::unique("users", "username")],
            "email" => ["required", "max:30", Rule::unique("users", "email")],
            "password" => ["required", "min:8"],
        ]);

        $cleanData = array_merge($cleanData, ["imageUrl" => 'https://i.pravatar.cc/480?u=' . rand(10000, 40000), "phoneNumber" => "NULL"]);
        $user = User::create($cleanData);
        auth()->login($user);
        return redirect("/")->with("success", "Welcome to book reader " . $user->name . " 🎉");
    }


    public function login()
    {
        request()->validate([
            "email" => ["required", "min:10", Rule::exists("users", "email")],
            "password" => ["required", "min:8"],
        ]);

        $user = User::where("email", request("email"))->first();

        if (Hash::check(request("password"), $user->password)) {
            auth()->login($user);

            return redirect("/")->with("success", "Welcome Back " . $user->name . " 🎉");
        }

        return redirect("/login")->withErrors(["error" => "Authentication Fail Something wrong"])->withInput();
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/")->with("success", "Logout Success. See u soon 🪲.");
    }


    
}
