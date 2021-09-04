<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function get_all_services(){
        $services = Service::all();

        return view("dorubtechAdmin.modifyServices",[
            "services"=>$services ?? "there is no services in the database ..."
        ]);
    }

    public function update(Request $request){
        $request->validate([
            "service_name" => ["required"],
            "service_desc" => ["required"],
            "image" => ["image","mimes:jpeg,png,jpg,gif,svg","max:2048"]
        ]);

        $service = Service::find($request->id);

       if($request->image){
           //delete the previous image
           unlink(public_path($request->img));

           //to store the image
           $imagename= time().".".$request->image->extension();
           $request->image->move(public_path("services_images"),$imagename);
       }

        $service->update([
          "name"=>$request->service_name,
          "img"=>$request->image != null ? "/services_images/".$imagename : $service->img,
          "desc"=>$request->service_desc,
            ]);

        session()->flash("success","the service has been updated");
        return back();
    }

    public function delete(Request $request){
        $service = Service::find($request->id);
        unlink(public_path($request->img));
        $service->delete();

        session()->flash("success","the service has been deleted");
        return back();
    }
}
