<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ReadList;
use Illuminate\Http\Request;

class ReadListController extends Controller
{
    //

    public function show(ReadList $readlist)
    {
        return view("readlist.index", [
            "readlist" => $readlist
        ]);
    }

    public function store()
    {
        // Check if the token is valid and retrieve the user

        $readlist = ReadList::create(["title" =>  request("title"), "user_id" => request("user_id")]);
        return response()->json([
            "title" => request("title"),
            "id" => $readlist->id,
            "status" => "success"
        ], 201);
    }

    public function destory(ReadList $readlist)
    {

        $readlist->books()->detach($readlist->books);
        $readlist->delete();

        return redirect("/user/admin/readlist")->with("success", "Read list Successfully deleted ✅");
    }

    public function removeBook(Book $book)
    {
        $book->readLists()->detach($book->readLists);
        return back()->with("success", "Book successfully removed from Read list ✅");
    }


    public function new()
    {

        $readlist = ReadList::create([
            "title" => request("title"),
            "user_id" => auth()->user()->id
        ]);

        $readlist->save();
        return redirect("/readlist/" . $readlist->id . "/show")->with("success", "Read List Successfully created!✅");
    }

    public function update(ReadList $readlist)
    {
        $clean_data = request()->validate([
            "title" => ["required"]
        ]);
        $readlist->title = $clean_data["title"];

        $readlist->update();

        return back()->with("success", "Read List Successfully updated!✅");
    }

    public function private(ReadList $readlist)
    {
        $readlist->private = !$readlist->private;
        $readlist->update();
        return back()->with("success", "Read List is Private!✅");
    }
}
