<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\File;
use App\Models\Book;
use App\Models\Genres;

class BookController extends Controller
{
    public function index()
    {
        return view("book.index");
    }

    public function books()
    {
        $title = request("genres") ? Genres::where("slug", request("genres"))->first()?->name : "Result";
        return view("book.filter-books", [
            "books" => Book::with(["user"])->filter(request(["genres", "search", "author"]))->latest()->paginate(10)->withQueryString(),
            "title" => $title
        ]);
    }

    public function show(Book $book)
    {
        return view("book.book-detail", [
            "book" => $book->load(["reviews", "chapters"])
        ]);
    }

    public function subscribe(Book $book)
    {
        
    }

    public function create()
    {
        return view(
            "book.create",
            ["genres" => Genres::all()]
        );
    }

    public function edit(Book $book)
    {
        return view(
            "book.edit",
            [
                "book" => $book,
                "genres" => Genres::all()
            ]
        );
    }

    public function insert(BookRequest $request)
    {
        $cleanData = $request->validated();
        $cleanData["user_id"] = auth()->id();
        $cleanData["image"] = "/storage/" . request("image")->store("/books");


        $cleanData["isPublished"] = false;
        $cleanData["status"] = "ongoing";


        if ($cleanData["ggcoin"]) {
            $cleanData["isFree"] = 1;
        } else {
            $cleanData["isFree"] = 0;
        }

        $book = Book::create($cleanData);

        // dd($book);
        $book->genres()->attach($cleanData["genres"]);

        return redirect("/author/creation");
    }

    public function update(BookRequest $request, Book $book)
    {
        $cleanData = $request->validated();
        $cleanData["user_id"] = auth()->id();

        $book->title = $cleanData["title"];
        $book->slug = $cleanData["slug"];
        $book->publish = $cleanData["publish"];
        $book->body = $cleanData["body"];
        $book->ggcoin = $cleanData["ggcoin"];
        $book->isFree = $cleanData["ggcoin"] == 0 ? 0 : 1;


        if ($file = request("image")) {
            if ($path = public_path($book->image)) {
                File::delete($path);
                $book->image = '/storage/' . $file->store('/books');
            }
        }
        $book->genres()->detach($book->genres);
        $book->genres()->attach($cleanData["genres"]);
        $book->update();
        return redirect("/author/creation");
    }

    public function destory()
    {
        $ids = request("book");

        if (count($ids)) {
            return redirect("/author/creation")->with("error", "complete filll boxes");
        }

        foreach (Book::whereIn("id", $ids)->get() as $book) {
            $book->delete();
            $book->genres()->detach($book->genres);
        }
        return redirect("/author/creation");
    }
}
