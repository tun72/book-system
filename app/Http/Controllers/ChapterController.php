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
        return view("book.read-book", [
            "chapter" => $chapter,
            "book" => $chapter->book
        ]);
    }

    public function create(Book $book)
    {
        return view("chapter.create", ["book" => $book]);
    }

    public function store(Book $book)
    {
        $cleanData = request()->validate([
            "story" => ["required", "min:10"],
            "title" => ["required", "min:3"]
        ]);

        $chapter = Chapter::create([
            "title" => $cleanData["title"],
            "slug" => fake()->slug(),
            "intro" => fake()->paragraph(),
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
}
