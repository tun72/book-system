<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AddReadListController extends Controller
{
    //
    public function addReadList()
    {
        // $cleanData = request()->validate([
        //     "lists" => "required",
        //     "book_id" => "required"
        // ]);

        $book = Book::find(request("book_id"));


        $book->readLists()->detach($book->readLists);


        $book->readLists()->attach(request("lists"));







        return response()->json([
            "status" => request("lists")
        ], 201);
    }
}
