<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    //


    public function getPrice()
    {
        return view("pricing.pricing-section");
    }

    public function coins()
    {
        return view("pricing.payment", [
            "coin" => request("coin"),
            "payment" => request("payment")
        ]);
    }

    public function store()
    {

        $clean_data = request()->validate([
            "ggcoin" => "required",
            "image" => ["required"],
            "accname" => ["required"],
            "payment" => ["required"]
        ]);


        $clean_data["user_id"] = auth()->id();

        Transfer::create($clean_data);

        return redirect("/success");
    }

    public function confirm()
    {
        $clean_data = request()->validate([
            "ggcoin" => "required",
            "image" => ["required", "image"],
            "accname" => ["required"],
            "payment" => ["required"]
        ]);

        $clean_data["image"] = "/storage/" . request("image")->store("/transfers");

        return view("pricing.confirm", [
            "ggcoin" => request("ggcoin"),
            "payment" => request("payment"),
            "accname" => request("accname"),
            "image" => $clean_data["image"]
        ]);
    }
}
