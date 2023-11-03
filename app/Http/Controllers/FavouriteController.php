<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    //

    public function handelFavourite(Book $book)
    {

        $user = User::find(auth()->id());

        if ($user->isFavourited($book)) {
            $user->favouritedBooks()->detach($book->id);
        } else {
            $user->favouritedBooks()->attach($book->id);
        }

        return back();
    }
}
