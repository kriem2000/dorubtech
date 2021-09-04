<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function receive_message(Request $request){
        $request->validate([
            "sender_name" => ["required","string","max:50"],
            "sender_email"=> ["required","email"],
            "sender_number"=>["required","regex:"]
        ]);
    }
}
