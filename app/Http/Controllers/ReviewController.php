<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Book $book)
    {
        request()->validate([
            "body" => ["required", "max:100", "min:5"],
            "rating" => ["required", "max:5", "min:0"]
        ]);
        $book->reviews()->create([
            "body" => request("body"),
            "rating" => request("rating"),
            "user_id" => auth()->id()
        ]);

        return back();
    }
}
