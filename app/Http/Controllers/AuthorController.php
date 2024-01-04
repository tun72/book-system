<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\AuthorRegister;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // dashboard
    public function index()
    {
        $user = User::find(auth()->id())->load("books");

        // dd($user->books());
        return view("author.index", [
            "books" => $user->books
        ]);
    }

    // creation 
    public function creation() {
        return view("author.creation", [
          "books" => auth()->user()->books
        ]);
    }




    // author register

    public function register()
    {
        return view("author.register");
    }


    public function confirm(AuthorRequest $request)
    {

        $cleanData = $request->validated();
        $cleanData["user_id"] = auth()->id();

        
        $author = AuthorRegister::create($cleanData);
        $author->save();
        return redirect("/user-profile/" . auth()->user()->username );
    }


}
