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

        $nextChapter = $chapter->book->chapters()->where("chapter", $chapter->chapter + 1)->first();
        $prevChapter = $chapter->book->chapters()->where("chapter", $chapter->chapter - 1)->first();
        $complete = false;
        try {
            if ($prevChapter && request("complete") === "true") {
                $prevChapter->is_finish = 1;
                $prevChapter->save();
                auth()->user()->chapters()->attach($prevChapter->id);
            }

            $totalComplete = count($chapter->book->chapters()->where("is_finish", 1)->get());
            // dd($totalComplete  );
            if (!$nextChapter) {
                $complete = $totalComplete  === count($chapter->book->chapters) ||  $totalComplete === count($chapter->book->chapters) - 1;
            }


            return view("book.read-book", [
                "chapter" => $chapter,
                "book" => $chapter->book,
                "nextChapter" => $nextChapter,
                "prevChapter" => $prevChapter,
                "complete" => $complete
            ]);
        } catch (\Exception $e) {
            return view("book.read-book", [
                "chapter" => $chapter,
                "book" => $chapter->book,
                "nextChapter" => $nextChapter,
                "prevChapter" => $prevChapter,
                "complete" => $complete
            ]);
        }
    }

    public function complete(Chapter $chapter)
    {
        try {
            $chapter->is_finish = 1;
            $chapter->save();
            auth()->user()->chapters()->attach($chapter->id);

            return redirect("/user/library");
        } catch (\Exception $e) {
            return redirect("/user/library");
        }
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
