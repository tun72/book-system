<?php

namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;


class GoogleLoginController extends Controller
{
    //
    public function signInwithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callbackToGoogle()
    {

        // $user = Socialite::driver('google')->user();
        $user = Socialite::driver('google')->stateless()->user();
        $existingUser = User::where('google_id', $user->id)->first();

        if ($existingUser) {
            // Log in the existing user.
            auth()->login($existingUser, true);
        } else {
            // Create a new user.
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->username = $user->name;
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            $newUser->password = bcrypt(request(Str::random())); // Set some random password
            $newUser->imageUrl = $user->avatar;
            $newUser->phoneNumber = "NULL";
            $newUser->background = "";
            $newUser->verify = true;

            $newUser->save();

            // Log in the new user.
            auth()->login($newUser, true);
            return redirect("/complete-your-profile/1");
        }


        // Redirect to url as requested by user, if empty use /dashboard page as generated by Jetstream
        return redirect("/")->with("success", "Welcome Back " . $user->name . " 🎉");
    }
}
