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
            "author" => $author,
            "books" => $author->user->books()->where("isPublished", 1)->orderBy("created_at", "DESC")->latest()->limit(9)->get()
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
            "author" => $author,
            "books" => $author->user->books()->where("isPublished", 1)->orderBy("created_at", "DESC")->latest()->paginate(9)
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
