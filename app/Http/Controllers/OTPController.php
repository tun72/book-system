<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OTPController extends Controller
{
    //

    public function restart()
    {

        // dd(request("email"));
        $email = request("email");
        $user = User::where("email", $email)->first();



        if (!$user) {
            return response()->json([
                "message" => "Fail No user Found " . $email,
                "status" => "fail"
            ], 404);
        }
        $otp = rand(100000, 999999);

        $user->otp = $otp;
        $user['otp_expires_at'] = now()->addMinute(5)->toDateTimeString();

        $user->update();

        Mail::to($user->email)->queue(new AuthMail($otp, $user->name));

        return response()->json([
            "message" => "Successfully sented",
            "status" => "success"
        ], 201);
    }
}
