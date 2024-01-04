<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;


class BuyBookController extends Controller
{
    //

    public function handelBuyBook(Book $book)
    {
        $user = User::find(
            auth()->user()->id
        );

        if (!($user->ggcoin >= $book->ggcoin))
            return back()->with(["error" => "Not Enough coin."]);

        if (!$user->isBought($book)) {
            $user->ggcoin = $user->ggcoin - $book->ggcoin;
            $user->boughtBooks()->attach($book->id);
            $user->save();
        }
        return back();
    }

}
