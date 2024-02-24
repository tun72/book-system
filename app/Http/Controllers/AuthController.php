<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\Genres;
use App\Models\User;
use App\Models\UserProfiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
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

    public function completeProfile($id)
    {
        $genres = Genres::all();
        return view("auth/complete", ["id" => $id, "genres" => $genres]);
    }



    public function register()
    {
        $cleanData = request()->validate([
            "name" => ["required", "min:3"],
            "email" => ["required", "max:30", Rule::unique("users", "email")],
            "password" => ["required", "min:8"],
        ]);

        $cleanData["username"] = $cleanData["name"];
        $cleanData = array_merge($cleanData, ["imageUrl" => 'https://i.pravatar.cc/480?u=' . rand(10000, 40000), "phoneNumber" => "NULL", "background" => ""]);
        $user = User::create($cleanData);
        Session::put('user_data', json_encode($cleanData));
        auth()->login($user);
        $otp = rand(100000, 999999);


        $user->update([
            'otp' => $otp,
            'otp_expires_at' => now()->addMinute(5)->toDateTimeString(), // OTP will expire in 5 minutes
        ]);

        $otp = $user->otp;

        Mail::to($cleanData["email"])->queue(new AuthMail($otp, $user->name));


        return redirect("/confirm-email");
    }

    public function confirm()
    {
        return view("auth.confirm");
    }

    public function checkOTP()
    {

        $storedResponse = json_decode(Session::get('user_data'), true);

        // dd($storedResponse);
        $user = User::where('email',  auth()->user()->email)
            ->where('otp', request("otpcode"))
            ->where('otp_expires_at', '>=', now())
            ->first();


        // dd($user);

        if (!$user) {
            // Handle OTP verification failure
            return redirect("/confirm-email")->withErrors(["error" => "Invalid OTP or expired"]);
        }

        // Clear the OTP and its expiration time after successful verification

        $user->otp = null;
        $user['otp_expires_at'] = null;
        $user->verify = 1;

        $user->update();

        return redirect("/complete-your-profile/1");
    }


    public function firstComplete()
    {

        $cleanData = request()->validate([
            "username" => ["required", "min:3", Rule::unique("users", "username")],
            "about" => ["required"],
            "address" => ["required"],
            "photo" => ["required", "image"]
        ]);

        if ($file = request("photo")) {
            $cleanData["photo"] = "/storage/" . $file->store("/users");
        }

        // Session::put('user_data', json_encode($cleanData));
        $user = User::find(auth()->id());

        $user->imageUrl = $cleanData["photo"];
        $user->username = $cleanData["username"];
        $user->update();

        UserProfiles::create([
            "user_id" => $user->id,
            "genres" => "",
            "address" => $cleanData["address"],
            "about" => $cleanData["about"]
        ]);


        return redirect("/complete-your-profile/2");
    }

    public function secondComplete()
    {
        // $storedResponse = json_decode(Session::get('user_data'), true);

        $cleanData = request()->validate([
            "genres" => ["required"],
        ]);


        $user = User::find(auth()->id());
        $genres = implode(",", $cleanData["genres"]);



        $userprofile =  UserProfiles::where("user_id", auth()->id())->first();
        $userprofile->genres = $genres;
        $userprofile->update();
        return redirect("/")->with("success", "Register Success. Welcome " . $user->name . " 🎉");
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
