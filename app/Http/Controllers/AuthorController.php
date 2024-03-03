<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\AuthorIncomes;
use App\Models\AuthorProfile;
use App\Models\AuthorRegister;
use App\Models\Book;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;

class AuthorController extends Controller
{
    // dashboard
    public function index()
    {
        $user = User::find(auth()->id())->load("books");

        $incomes = AuthorIncomes::where("author_id", $user->id)->get();
        // dd($user->books());

        return view("author.index", [
            "books" => $user->books,
            "earns" => $incomes->load(["user"])
        ]);
    }

    // creation 
    public function creation()
    {
        $book = auth()->user()->books()->filter(request(["search"]))->latest()->paginate(10)->withQueryString();

        return view("author.creation", [
            "books" => $book
        ]);
    }



    // author register

    public function register()
    {
        return view("author.register");
    }


    public function confirm(AuthorRequest $request)
    {

        $cleanData = $request->validated();

        // dd($cleanData);
        $cleanData["user_id"] = auth()->id();

        $cleanData["agree"] = true;

        $author = AuthorRegister::create($cleanData);
        $author->save();
        return redirect("/user-profile/" . auth()->user()->username)->with("success", "Successfully Registered ✅");
    }

    public function comments(User $user)
    {

        return view("author.comments", ["books" => $user->books]);
    }

    public function incomes($author)
    {

        $incomes = AuthorIncomes::where("author_id", $author)->get();
        return view("author.incomes", ["earns" => $incomes->load(["user"])]);
    }

    public function sell()
    {
        return view("author.sell");
    }

    public function notification()
    {
        return view("author.notification", [
            "notifications" => Notification::where("recipient_id", auth()->user()->id)->get()
        ]);
    }
    public function reader()
    {
        $users = AuthorProfile::where("user_id", auth()->id())->first()->subscribers;

        return view("author.reader", ["users" => $users]);
    }

    public function verify(User $user)
    {
        $user->author->isVerified = true;
        $user->author->save();
        return back()->with("success", "Successfully Verified ✅");
    }
}
