<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Archive;
use Illuminate\Support\Facades\File;
use App\Models\Book;
use App\Models\Genres;
use App\Models\Notification;
use App\Models\Setting;
use Exception;

class BookController extends Controller
{
    public function index()
    {
        return view("book.index");
    }

    public function searchBookApi($query)
    {
        try {
            $books = Book::where("isPublished", true)->where("title", "LIKE", "%" . $query . "%")->orwhere("body", "LIKE", "%" . $query . "%")->get();
            return response()->json($books, 201);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'status' => 500
            ], 500);
        }
    }
    public function trends()
    {
        return view("book.trend", [
            "books" => Book::with(["user"])->where("isPublished", true)->orderBy("rating", "DESC")->latest()->paginate(8),
        ]);
    }

    public function populars()
    {
        return view("book.popular", [
            "books" => Book::with(["user"])->where("isPublished", true)->orderBy("rating", "ASC")->latest()->paginate(8),
        ]);
    }


    public function books()
    {

        $bookQuery = Book::with(["user"])->filter(request(["genres", "search", "author", "ggcoin"]));
        // dd(request("sort") === "new");
        if (request("sort") === "new") {
            $bookQuery->orderBy("created_at", "DESC");
        } else {
            $bookQuery->orderBy("rating", "DESC");
        }

        $bookQuery = $bookQuery->where("isPublished", true)->latest()->paginate(10)->withQueryString();

        $title = request("genres") ? Genres::where("slug", request("genres"))->first()?->name : "Result";
        return view("book.filter-books", [
            "books" => $bookQuery,
            "title" => $title,
            "genres" => Genres::all()

        ]);
    }

    public function show(Book $book)
    {
        $slugArray = [];
        foreach ($book->genres as $item) {
            $slugArray[] = $item['slug'];
        }

        return view("book.book-detail", [
            "book" => $book->load(["reviews", "chapters"]),
            'randomBooks' => cache()->remember('blogs' . $book->slug, now()->addSeconds(10), function () use ($slugArray) {

                return Book::inRandomOrder()->where("isPublished", true)->whereHas("genres", function ($genresQuery) use ($slugArray) {
                    $genresQuery->whereIn("slug", $slugArray);
                })->take(4)->get();
            })
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
                "book" => $book->load(["chapters", "genres"]),
                "genres" => Genres::all()
            ]
        );
    }

    public function detail(Book $book)
    {
        return view("author.detail", [
            "book" => $book
        ]);
    }

    public function insert(BookRequest $request)
    {


        $cleanData = $request->validated();

        $cleanData["user_id"] = auth()->id();
        $cleanData["image"] = "/storage/" . request("image")->store("/books");


        $cleanData["isPublished"] = false;
        $cleanData["status"] = "ongoing";
        $cleanData["isRequested"] = 0;


        if (!auth()->user()->author->isVerified) {
            $cleanData["ggcoin"] = 0;
        }

        if ($cleanData["ggcoin"]) {
            $cleanData["isFree"] = 1;
        } else {
            $cleanData["isFree"] = 0;
        }



        $book = Book::create($cleanData);

        dd($book);
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
        $book->caption = $cleanData["caption"];

        if (!auth()->user()->author->isVerified) {
            $book->ggcoin = 0;
        }

        $book->isFree = $cleanData["ggcoin"] == 0 ? 0 : 1;
        $book->discount =  request("discount") ?? 0;
        $book->status = $cleanData["status"];

        $book->isPublished = request("isPublished") ?? 0;


        if ($file = request("image")) {
            if ($path = public_path($book->image)) {
                File::delete($path);
            }
            $book->image = '/storage/' . $file->store('/books');
        }
        $book->genres()->detach($book->genres);
        $book->genres()->attach($cleanData["genres"]);
        $book->update();
        return redirect("/author/creation")->with("success", "Successfully Updated Book ✅");
    }

    public function destory()
    {
        $ids = request("book");

        if (!$ids) {
            return redirect("/author/creation")->with("error", "complete fill boxes");
        }

        foreach (Book::whereIn("id", $ids)->get() as $book) {
            $book->delete();
            $book->genres()->detach($book->genres);
        }
        return redirect("/author/creation")->with("success", "Successfully Deleted Book ✅");
    }

    public function publish(Book $book)
    {
        $setting = Setting::where("id", 1)->first();

        // dd($book);
        if ($book?->isRequested === 0 && count($book?->chapters) >= $setting["limit_author"]) {
            $book->isRequested = true;
            $book->update();
            return back()->with("success", "Successfully Request to Admin!");
        } else if ($book?->isPublished === 1) {
            $book->isPublished = false;
            $book->update();
            return back()->with("success", "Successfully unPublished!");
        } else if ($book?->isRequested === 1) {
            return back()->with("error", "Already Published");
        }
        return back()->with("error", "To Publish need to complete at least" . $setting["limit_author"] . "Chapters!");
    }




    public function archive(Book $book)
    {
        Archive::create([
            "book_id" => $book->id,
            "user_id" => auth()->user()->id
        ]);

        $book->isArchive = true;
        $book->update();

        return back()->with("success", "Successfully Archived Book ✅");
    }
}
