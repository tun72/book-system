<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellRequest;
use App\Mail\SellMail;
use App\Models\AdminHistory;
use App\Models\History;
use App\Models\Sells;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SellsController extends Controller
{
    //

    public function index()
    {
        $limit = Setting::where("id", 1)->first()->limit_coin;
        return view("author.sell", [
            "type" => "normal",
            "limit" => $limit
        ]);
    }

    public function store(SellRequest $request)
    {
        $clean_data = $request->validated();



        $clean_data["qrcode"] = "/storage/" . request("qrcode")->store("/qrcodes");


        $sell = Sells::where("user_id", $clean_data["user_id"])->first();

        if ($sell) {
            $sell->ggcoin += $clean_data["ggcoin"];
            $sell->update();
        } else {
            $sell = Sells::create($clean_data);
        }

        $user = User::where("id", auth()->user()->id)->first();

        $user->ggcoin -= $sell->ggcoin;

        $user->update();



        AdminHistory::create([
            "user_id" => $user->id,
            "status" => "Outcome",
            "ggcoin" => $sell->ggcoin,
        ]);

        History::create([
            "user_id" => $user->id,
            "title" => "Sell coins",
            "about" => "You sell coins to Admin. Amount " . $sell->ggcoin
        ]);


        return redirect("/success");
    }

    public function confirm(Sells $sell)
    {
        $sell->status = "success";
        $sell->save();

        Mail::to($sell->user->email)->queue(new SellMail($sell->user->name, "success"));
        return back()->with("success", "Successfully transfered Chief🪲 ✅.");
    }

    public function delete(Sells $sell)
    {

        Mail::to("locog863@gmail.com")->queue(new SellMail($sell->user->name, "denied"));

        $sell->user->ggcoin += $sell->ggcoin;
        $sell->user->update();
        $sell->delete();
        return back()->with("success", "Successfully deleted Chief🪲 ✅.");
    }
}
