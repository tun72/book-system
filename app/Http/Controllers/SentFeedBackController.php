<?php

namespace App\Http\Controllers;

use App\Models\SentFeedBack;
use Illuminate\Http\Request;

class SentFeedBackController extends Controller
{
    //
    public function index() {
        return view("user.sent-feedback");
    }

    public function insert() {
        $cleanData = request()->validate([
            "name" => ["required", "min:3"],
            "email" => ["required", "min:3"],
            "message" => ["required"]
        ]);

        SentFeedBack::create($cleanData);
        return redirect("/")->with("success", "FeedBack Successfully Sent ✅");
    }
}
