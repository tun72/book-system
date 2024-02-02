<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Comments;
use App\Models\Notification;
use App\Models\User;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //

    public function store(Chapter $chapter)
    {

        $chapter->comments()->create([
            "body" => request("body"),
            "user_id" => auth()->id()
        ]);


        $users = $chapter->book->getPurchasers();
        foreach ($users as $user) {
            $noti = Notification::create([
                "about" => "comment",
                "user_id" => auth()->user()->id,
                "recipient_id" => $user->id,
                "chapter_id" => $chapter->id,
                "book_id" => $chapter->book->id
            ]);
            $noti->save();
        }

        return back();
    }

    public function update(Comments $comment)
    {
        $comment->update([
            "body" => request("body")
        ]);

        return back()->with("success", "Successfully Updated !");
    }

    public function delete(Comments $comment)
    {
        $comment->delete();
        return back()->with("success", "Successfully Deleted !");
    }
}
