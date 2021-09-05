<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;

class MessagesController extends Controller
{
    public function receive_message(Request $request){
        $request->validate([
            "sender_name" => ["required","string","max:50"],
            "sender_email"=> ["required","email"],
            "sender_number"=>["required","regex:/^([0-9\s\-\+\(\)]*)$/","min:10"],
            "sender_message"=>["required","string","max:800"]
        ]);

        $multisend = Messages::where("sender_email",$request->sender_email)
                                ->whereDate("created_at",date('Y-m-d')."%")->count();

        if($multisend>1){
            session()->flash("error","your message already has been sent...");
            return back();
        }else{
            Messages::create([
                "sender_name"=>$request->sender_name,
                "sender_email"=>$request->sender_email,
                "sender_number"=>$request->sender_number,
                "sender_message"=>$request->sender_message
            ]);
            session()->flash("success","your message has been sent successfully...");
            return back();
        }


    }
}
