<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(Request $request){
        $request->validate([
            "service_name" => ["required"],
            "service_desc" => ["required"],
            "image" => ["required","image","mimes:jpeg,png,jpg,gif,svg","max:2048"]
        ]);

        //to store the image
        $imagename= time().".".$request->image->extension();
        $request->image->move(public_path("services_images"),$imagename);
        
        Service::create([
            "name"=>$request->service_name,
            "img"=>"/services_images/".$imagename,
            "desc"=>$request->service_desc,
        ]);

        session()->flash("success","the new service has been added");
        return back();
    }
}
