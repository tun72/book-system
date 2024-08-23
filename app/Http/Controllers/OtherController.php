<?php

namespace App\Http\Controllers;

use App\Mail\InviteMail;
use App\Mail\userMessageMail;
use App\Models\SentFeedBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtherController extends Controller
{
    //

    public function welcome()
    {
        $feedbacks = SentFeedBack::all();
        return view("other.welcome", [
            "feedbacks" => $feedbacks
        ]);
    }

    public function contact()
    {
        return view("other.contact");
    }

    public function about()
    {
        return view("other.about");
    }

    public function qanda()
    {
        return view("other.qanda");
    }


    public function email()
    {
        if(request("fname") && request("fname"))
           Mail::to(request("email"))->queue(new InviteMail(request("fname")));

        return back();
    }


    public function message()
    {
        dd(request("body"));
        Mail::to("tunt72553@gmail.com")->queue(new userMessageMail(request("username"), request("body")));
        return back();
    }
}
