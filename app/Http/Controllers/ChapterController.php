<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Chapter;
use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class ChapterController extends Controller
{
    //
    public function show(Chapter $chapter)
    {
        // $text = Pdf::getText(public_path($chapter->file), 'C:\Program Files\Git\mingw64\bin\pdftotext.exe');
        $book = $chapter->book;

        $nextChapter = $book->chapters()->where("chapter", $chapter->chapter + 1)->first();
        $prevChapter = $book->chapters()->where("chapter", $chapter->chapter - 1)->first();
        $complete = false;

       
        

        if ($prevChapter && request("complete") === "true") {
            $prevChapter->is_finish = 1;
            $prevChapter->save();
        }

        $totalComplete = count($book->chapters()->where("is_finish", 1)->get());
        // dd($totalComplete  );
        if (!$nextChapter) {
            $complete = $totalComplete  === count($book->chapters) ||  $totalComplete === count($book->chapters) - 1;
        }


        return view("book.read-book", [
            "chapter" => $chapter,
            "book" => $book,
            "nextChapter" => $nextChapter,
            "prevChapter" => $prevChapter,
            "complete" => $complete
        ]);
    }

    public function complete(Chapter $chapter)
    {
        $chapter->is_finish = 1;
        $chapter->save();

        return redirect("/user/library");
    }

    public function create(Book $book)
    {
        return view("chapter.create", ["book" => $book]);
    }

    public function store(Book $book)
    {
        $cleanData = request()->validate([
            "story" => ["required", "min:10"],
            "title" => ["required", "min:3"],

        ]);
        $chapter = Chapter::create([
            "title" => $cleanData["title"],
            "slug" => fake()->slug(),
            "intro" => fake()->paragraph(),
            "chapter" => count($book->chapters) + 1,
            "story" => $cleanData["story"],
            "book_id" => $book->id
        ]);
        $chapter->save();

        return redirect("/author/book/" . $book->id . "/detail");
    }

    public function edit(Chapter $chapter)
    {
        return view("chapter.edit", ["book" => $chapter->book, "chapter" => $chapter]);
    }

    public function update(Chapter $chapter)
    {
        $cleanData = request()->validate([
            "story" => ["required", "min:10"],
            "title" => ["required", "min:3"]
        ]);
        $chapter->title = $cleanData["title"];
        $chapter->story = $cleanData["story"];
        $chapter->update();

        return redirect("/author/book/" . $chapter->book->id . "/detail");
    }

    public function delete(Chapter $chapter)
    {
        $chapter->delete();
        return redirect("/author/book/" . $chapter->book->id . "/detail");
    }

    public function new(Book $book)
    {

        $cleanData = request()->validate([
            "chapter" => "required",
            "is_free" => "required",
            "title" => "required",
            "intro" => "required"
        ]);

        // dd($cleanData);
        $cleanData["is_free"] = $cleanData["is_free"] === "true";
        $cleanData["story"] = "No Story Yet";
        $cleanData["slug"] = fake()->slug();

        $cleanData["book_id"] = $book->id;


        Chapter::create($cleanData);
        return back();
    }
}
