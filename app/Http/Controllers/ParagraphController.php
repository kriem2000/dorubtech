<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paragraph;
use App\Models\Service;

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
public function home_paragraph(){
        $titlefirstP=explode(" ",Paragraph::where("for_type","=","firstP")->get()->pluck("title")[0]);
        $bodyfirstP=Paragraph::where("for_type","=","firstP")->get()->pluck("body")[0];
        $titlesecondP=explode(" ",Paragraph::where("for_type","=","secondP")->get()->pluck("title")[0]);
        $bodysecondP=Paragraph::where("for_type","=","secondP")->get()->pluck("body")[0];
        $titlethirdP=explode(" ",Paragraph::where("for_type","=","thirdP")->get()->pluck("title")[0]);
        $bodythirdP=Paragraph::where("for_type","=","thirdP")->get()->pluck("body")[0];


    return view("dorubtech.home",[
    "titlefirstP"=> $titlefirstP,
    "bodyfirstP"=> $bodyfirstP,
    "titlesecondP"=>$titlesecondP,
    "bodysecondP"=>$bodysecondP,
    "titlethirdP"=>$titlethirdP,
    "bodythird"=>$bodythirdP
    ]   );
}

public function get_all_paragraphs(){
        $partners=Paragraph::where("for_type","partners")->get();
        $firstP=Paragraph::where("for_type","firstP")->get();
        $secondP=Paragraph::where("for_type","secondP")->get();
        $thirdP=Paragraph::where("for_type","thirdP")->get();

        return view("dorubtechAdmin.modify_paragraphs",[
            "partners"=>$partners,
            "firstP"=>$firstP,
            "secondP"=>$secondP,
            "thirdP"=>$thirdP,
        ]);
}

public function update_partners(Request $request){
        $partnerP=Paragraph::findOrFail($request->partners_id);
        $request->validate([
            "partners_body"=>"required"
        ]);

        $partnerP->update([
            "body"=>$request->partners_body
            ]);

        session()->flash("success","the new paragraph has been updated");
        return back();
}

public function update_firstP(Request $request) {
        $firstP=Paragraph::findOrFail($request->id);
    $request->validate([
        "firstP_title"=>"required",
        "firstP_body"=>"required"
    ]);

    $firstP->update([
        "title"=>$request->firstP_title,
        "body"=>$request->firstP_body
    ]);

    session()->flash("success","the new paragraph has been updated");
    return back();
}

    public function update_secondP(Request $request) {
        $firstP=Paragraph::findOrFail($request->id);
        $request->validate([
            "secondP_title"=>"required",
            "secondP_body"=>"required"
        ]);

        $firstP->update([
            "title"=>$request->secondP_title,
            "body"=>$request->secondP_body
        ]);

        session()->flash("success","the new paragraph has been updated");
        return back();
    }

    public function update_thirdP(Request $request) {
        $firstP=Paragraph::findOrFail($request->id);
        $request->validate([
            "thirdP_title"=>"required",
            "thirdP_body"=>"required"
        ]);

        $firstP->update([
            "title"=>$request->thirdP_title,
            "body"=>$request->thirdP_body
        ]);

        session()->flash("success","the new paragraph has been updated");
        return back();
    }

}
