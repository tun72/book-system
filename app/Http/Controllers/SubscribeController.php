<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\User;

class SubscribeController extends Controller
{
    //
    public function subscribe(Book $book)
    {

        $user = User::find(auth()->id());

        if ($user->isSubscribed($book)) {
            $user->subscribedBooks()->detach($book->id);
        } else {
            $user->subscribedBooks()->attach($book->id);
        }

        return back();
    }
}
