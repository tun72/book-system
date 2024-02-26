<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    //

    public function welcome()
    {
        return view("other.welcome");
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
}
