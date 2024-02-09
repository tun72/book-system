<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellRequest;
use App\Models\Sells;
use App\Models\User;
use Illuminate\Http\Request;

class SellsController extends Controller
{
    //

    public function index()
    {
        return view("author.sell", [
            "type" => "normal"
        ]);
    }

    public function store(SellRequest $request)
    {
        $clean_data = $request->validated();

        $sell = Sells::where("user_id", $clean_data["user_id"])->first();
        if ($sell) {
           
            $sell->ggcoin += $clean_data["ggcoin"];
            $sell->update();

            return redirect("/success");
        }
        $sell = Sells::create($clean_data);

        $user = User::where("id", auth()->user()->id)->first();

        $user->ggcoin -= $sell->ggcoin;

        $user->update();

        return redirect("/success");
    }
}
