<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genres;

class BookController extends Controller
{
    public function index()
    {
        return view("components.index");
    }

    public function books()
    {
        $title = request("genres") ? Genres::where("slug", request("genres"))->first()?->name : "Result";
        return view("components.filter-books", [
            "books" => Book::with(["user"])->filter(request(["genres", "search", "author"]))->latest()->paginate(10)->withQueryString(),
            "title" => $title
        ]);
    }

    public function show(Book $book)
    {
        return view("components.book-detail", [
            "book" => $book->load(["reviews", "chapters"])
        ]);
    }

    public function subscribe(Book $book) {
        
    }
}
