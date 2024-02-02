<?php

namespace App\Http\Controllers;

use App\Models\AuthorProfile;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\User;

class SubscribeController extends Controller
{
    //
    public function subscribe(AuthorProfile $author)
    {

        $user = User::find(auth()->id());

        $user->isSubscribed($author);

        if ($user->isSubscribed($author)) {
            $user->subscribe()->detach($author->id);
        } else {
            $user->subscribe()->attach($author->id);
        }

        return back();
    }
}
