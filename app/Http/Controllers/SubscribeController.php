<?php

namespace App\Http\Controllers;

use App\Models\AuthorProfile;
use App\Models\Book;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;

class SubscribeController extends Controller
{
    //
    public function subscribe(AuthorProfile $author)
    {
        $user = User::find(auth()->id());
        if ($user->isSubscribed($author)) {
            $user->subscribe()->detach($author->id);
        } else {
            $user->subscribe()->attach($author->id);
            $notification = Notification::create([
                "about" => "followed you",
                "user_id" => $author->id,
                "recipient_id" => $user->id,
            ]);
        }
        return back();
    }
}
