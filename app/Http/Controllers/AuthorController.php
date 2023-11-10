<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function index()
    {
        $user = User::find(auth()->id())->load("books");

        // dd($user->books());
        return view("author.index", [
            "books" => $user->books
        ]);
    }
}
