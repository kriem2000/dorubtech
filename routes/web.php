<?php

use App\Http\Controllers\ParagraphController;
use App\Http\Controllers\ServiceController;
use App\Models\Paragraph;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//post request for admin
Route::post("/modify_aboutus",[ParagraphController::class,"modify_aboutus"]);
Route::post("/add_service",[ServiceController::class,"create"]);


//for admin and managers
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(["prefix"=>"dashboadr","middleware"=>"auth"],function(){
    Route::get("/manageContent",function (){
        return view("dorubtechAdmin.manageContentPage");
    })->name("manageContent");

    Route::get("/aboutus",[ParagraphController::class,"get_aboutus"])->name("aboutus-admin");
    Route::get("/addservice",function(){
        return view("dorubtechAdmin.addService");
    })->name("addservice");
});


require __DIR__.'/auth.php';

/*
 * <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//for guestes user
Route::group([],function(){
    //root
    Route::get("/",function(){
        return view("dorubtech.home");
    })->name("home");

    //all routes under home page..
    Route::group(["prefix"=>"/home"],function (){
        //about us
        Route::get("/about-us",[ParagraphController::class,"index"])->name("aboutUs") ;

        //services
        Route::get("/services",function (){
            return view("dorubtech.services");
        })->name("services") ;

        //our partners..
        Route::get("/our-partners",function (){
            return view("dorubtech.ourPartners");
        })->name("ourPartners") ;

        //form contact page...
        Route::get("/contact-us",function (){
            return view("dorubtech.contactUs");
        })->name("contactUs") ;
    });


});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
