<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //


    public function index()
    {
        $histories = History::where("user_id", auth()->id())->get();
        return view("user.history", ["histories" =>  $histories]);
    }
}
