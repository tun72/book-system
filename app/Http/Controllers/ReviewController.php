<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;


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

        $totalReview = count($book->reviews);
        $totalRating = $book->reviews->sum("rating");

        $book->rating = number_format($totalRating / ($totalReview * 5) * 5, 2);

        $book->save();



        return back();
    }

    public function index(Book $book)
    {
        return view("book.review", [
            "book" => $book,
            "reviews"  => $book->reviews->load(["comments"]),
        ]);
    }

    public function comment(Review $review)

    {
        $review->comments()->create([
            "body" => request("body"),
            "user_id" => auth()->id()
        ]);

        return back();
    }


    public function like(Review $review)

    {
        $review->like += 1;
        $review->likes()->create([
            "user_id" => auth()->id()
        ]);

        $review->update();


        return back();
    }

    public function unlike(Review $review)
    {
        $review->like -= 1;

        $review->likes()->where("user_id", auth()->user()->id)->delete();
        return back();
    }
}
