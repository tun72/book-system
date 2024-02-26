<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\Models\Chapter;
use App\Models\Comments;
use App\Models\Notification;
use App\Models\User;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    //

    public function store(Chapter $chapter)
    {

        $comment = $chapter->comments()->create([
            "body" => request("body"),
            "user_id" => auth()->id()
        ]);

        $users = $chapter->book->getPurchasers();
        foreach ($users as $user) {
            $noti = Notification::create([
                "about" => "comment on your purchased book",
                "user_id" => auth()->user()->id,
                "recipient_id" => $user->id,
                "chapter_id" => $chapter->id,
                "comment_id" => $comment->id
            ]);
            $noti->save();

            Mail::to("tunt72553@gmail.com")->queue(new NotificationMail(auth()->user()->id, "comment on your purchased book", $comment->body));
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
