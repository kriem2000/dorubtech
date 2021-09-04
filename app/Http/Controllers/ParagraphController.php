<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paragraph;

class ParagraphController extends Controller
{

    public function index(){
    $aboutus=Paragraph::where("for_type","aboutus")->get()->pluck("body")[0];
    
        return view("dorubtech.aboutUs",[
            "aboutus" =>$aboutus
        ]);
    }    
    
public function get_aboutus(){
    $aboutus=Paragraph::where("for_type","aboutus")->get()->pluck("body")[0];
    
    return view("dorubtechAdmin.aboutus",[
        "aboutus" => $aboutus
    ]);
}

public function modify_aboutus(Request $request){
    $request->validate([
        "textarea" => ["required"]
    ]);

    $paragraph=Paragraph::where("for_type","aboutus");
    $paragraph->update([
        "body"=>$request->textarea
    ]);

    session()->flash("success","about us has been updated");
    return back();
}

}
