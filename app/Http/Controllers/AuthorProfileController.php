<?php

namespace App\Http\Controllers;

use App\Models\AuthorProfile;
use App\Models\User;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class AuthorProfileController extends Controller
{
    //
    public function index($username)
    {
        $author = AuthorProfile::with(["user"])->whereHas("user", function ($authorQuery) use ($username) {

            $authorQuery->where("username", $username);
        })->first();


        // dd($author);
        if (auth()->user()->id === $author->id) {
            return back(); // fix this :: sent to author own profile
        }

        return view("author.social-profile", [
            "author" => $author
        ]);
    }

    public function books($username)
    {
        $author = AuthorProfile::with(["user"])->whereHas("user", function ($authorQuery) use ($username) {

            $authorQuery->where("username", $username);
        })->first();

        if (auth()->user()->id === $author->id) {
            return back(); // fix this :: sent to author own profile
        }

        return view("author.books", [
            "author" => $author
        ]);
    }



    public function setAuthor(User $author)
    {
        AuthorProfile::create([
            "name" => $author->name,
            "id" => $author->id
        ]);
    }
}
