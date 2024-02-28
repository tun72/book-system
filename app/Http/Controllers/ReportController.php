<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function store(Book $book)
    {
        Report::create([
            "book_id" => $book->user_id,
            "title" => request("title"),
            "about" => request("about"),
            "user_id" => request("user_id")
        ]);
        return back()->with("success", "Successfully Report admin will check soon... ✅");
    }

    public function index()
    {
        return view("admin.report", ["reports" => Report::all()]);
    }
}
