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

        $text = Pdf::getText(public_path($chapter->file), 'C:\Program Files\Git\mingw64\bin\pdftotext.exe');
        return view("components.read-book", [
            "text" => $text,
            "chapter" => $chapter,
            "book" => $chapter->book
        ]);
    }
}
