<?php

namespace App\Http\Controllers;

use App\Models\AuthorProfile;
use App\Models\AuthorRegister;
use App\Models\Book;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
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
        return view("admin.users", [
            "users" => User::whereIn("role", [0, 2])->get(),
        ]);
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
        AuthorProfile::create(["name" => $requser->user->name, "id" => $requser->user->id, "user_id" =>  $requser->user->id]);

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

    public function coinsConfirm(Transfer $transfer)
    {
        $transfer->user->ggcoin += $transfer->ggcoin;
        $transfer->user->update();
        $transfer->delete();
        return back()->with("success", "Successfully transfered Chief🪲 ✅.");;
    }


    public function coinsDelete(Transfer $transfer)
    {
        $transfer->delete();
        return back()->with("success", "Successfully deleted Chief🪲 ✅.");
    }
}
