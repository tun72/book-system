<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //

    public function clear()
    {
        $noti = Notification::where("recipient_id", auth()->user()->id)->delete();
        return back();
    }
}
