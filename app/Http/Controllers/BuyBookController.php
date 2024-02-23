<?php

namespace App\Http\Controllers;

use App\Models\AuthorIncomes;
use App\Models\User;
use App\Models\Book;
use App\Models\History;
use App\Models\Notification;

class BuyBookController extends Controller
{
    //

    public function handelBuyBook(Book $book)
    {
        $user = User::find(
            auth()->user()->id
        );

        // dd($book->title);

        if (!($user->ggcoin >= $book->ggcoin))
            return back()->with(["error" => "Not Enough coin."]);

        if (!$user->isBought($book)) {

            if ($book->ggcoin > 0) {
                $user->ggcoin = $user->ggcoin - $book->ggcoin;

                $book->user->ggcoin += $book->ggcoin;
                $book->user->update();

                $user->save();
            }

            $authorIncome = AuthorIncomes::create([
                "user_id" => $user->id,
                "author_id" => $book->user_id,
                "ggcoin" =>  $book->ggcoin,
                "book_id" => $book->id
            ]);


            $notification = Notification::create([
                "about" => "buy a book",
                "user_id" => $user->id,
                "recipient_id" => $book->user_id,
            ]);

            $history = History::create([
                "title" => "Buy new book",
                "about" => "You Buy a new book " . $book->title,
                "user_id" => auth()->user()->id
            ]);


            $notification->save();
            $history->save();
            $authorIncome->save();
            $user->boughtBooks()->attach($book->id);
        }
        return back()->with(["success" => "Successfully Buy a book ✅"]);;
    }
}
