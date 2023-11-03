<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    //
    protected $fillable = [
        "title",
        "intro"
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
