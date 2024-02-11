<?php

namespace App\Http\Controllers;

use App\Models\AuthorProfile;
use App\Models\AuthorRegister;
use App\Models\Book;
use App\Models\Genres;
use App\Models\Sells;
use App\Models\Tag;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PharIo\Manifest\Author;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view("admin.index", [
            "users" => User::whereIn("role", [0, 2])->get(),
            "books" => Book::all()
        ]);
    }


    public function users()
    {
        $ROLE = ["user" => [0], "author" => [2], "all" => [0, 2], "" => [0, 2]];
        $filter = $ROLE[request("filter")];
        return view("admin.users", [
            "users" => User::whereIn("role", $filter)->latest()->get()
        ]);
    }

    public function user(User $user)
    {

        return view("admin.profile", [
            "user" => $user,
            "genres" => Genres::whereIn("id", explode(",", $user->reader->genres))->get()
        ]);
    }

    public function updateUser(User $user)
    {
        $clean_data = request()->validate([
            "name" => ["required"],
            "username" => ["required"],
            "email" => ["required"],
            "role" => ["required"],
            "ggcoin" => ["required"],
            "phoneNumber" => ["required"]
        ]);


        if ($user->role === 0 && $clean_data["role"] == 2) {
            $user->role = 2;

            AuthorProfile::create(["name" => $user->name, "id" => $user->id, "user_id" => $user->id, "about" => $user->reader->about, "experience" => 0]);
        }

        $user->update($clean_data);


        return back()->with("success", "Successfully Edited Chief🪲 ✅.");
    }


    public function deleteUser(User $user)
    {
        $user->delete();
        return back()->with("success", "Successfully Deleted Chief🪲 ✅.");
    }


    public function reqAuthor()
    {

        $status = request("filter") ?? "all";

        $user = AuthorRegister::where("status", $status)->get();

        if ($status === "all") {
            $user = AuthorRegister::orderBy("status", "DESC")->get();
        }

        return view("admin.request-authors", [
            "users" => $user
        ]);
    }

    public function successRegAuthor(AuthorRegister $requser)
    {
        $requser->status = "success";
        $requser->confirm = 1;

        $requser->user->role = 2;

        $requser->update();
        $requser->user->update();
        AuthorProfile::create(["name" => $requser->user->name, "id" => $requser->user->id, "user_id" => $requser->user->id, "about" => $requser->about, "experience" => $requser->exp]);

        return redirect("/admin/authors/request"); // cheange redirect back later
    }


    public function denyRegAuthor(AuthorRegister $requser)
    {
        $requser->status = "denied";
        $requser->confirm = 0;
        $requser->user->role = 0;
        $requser->update();
        $requser->user->update();
        return redirect("/admin/authors/request"); // cheange redirect back later
    }

    public function coinsBuy()
    {
        return view("admin.coin-buy", [
            "transfers" => Transfer::all()
        ]);
    }

    public function coinsSell()
    {

        return view("admin.coin-sell", [
            "sells" => Sells::all()
        ]);
    }

    public function coinsConfirm(Transfer $transfer)
    {
        $transfer->user->ggcoin += $transfer->ggcoin;
        $transfer->user->update();
        $transfer->delete();
        return back()->with("success", "Successfully transfered Chief🪲 ✅.");
        ;
    }


    public function coinsDelete(Transfer $transfer)
    {
        $transfer->delete();
        return back()->with("success", "Successfully deleted Chief🪲 ✅.");
    }

    public function genres()
    {
        return view("admin.genres", ["genres" => Genres::latest()->get()]);
    }

    public function postGenres()
    {
        Genres::create([
            "name" => request("name"),
            "slug" => fake()->slug()
        ]);
        return back()->with("success", "New Genres Successfully Added Chief🪲 ✅.");
        ;
    }

    public function editGenres(Genres $genres)
    {

        $genres->name = request("name");
        $genres->update();
        return back()->with("success", "Genres Successfully Updated  Chief🪲 ✅.");
    }

    public function deleteGenres(Genres $genres)
    {
        $genres->delete();
        return back()->with("success", "Genres Successfully Deleted  Chief🪲 ✅.");
    }

    public function tags()
    {
        return view("admin.tags");
    }

    public function postTags()
    {
        Tag::create([
            "name" => request("name"),
        ]);
        return back()->with("success", "New Genres Successfully Added Chief🪲 ✅.");
        ;
    }


    public function books()
    {
        // $ROLE = ["free" => [0], "author" => [2], "all" => [0, 2], "" => [0, 2]];



        $book = Book::with(["user"])->filter(request(["status", "search", "author", "price"]));

        $bookQuery = $book->orderBy("created_at", "DESC");
        $bookQuery = $bookQuery->latest()->paginate(10)->withQueryString();
        // if ($filter !== "all" && $filter !== "") {
        //     $book = $book::where("status", $filter);
        // }

        // if ($filter === "free") {
        //     $book = $book->where("ggcoin", 1000);
        //     // dd($book);
        // }

        return view("admin.books", ["books" => $book->get()]);
    }
}
