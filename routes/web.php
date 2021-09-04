<?php

use App\Http\Controllers\ParagraphController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MessagesController;
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
Route::post("/modify_partners",[ParagraphController::class,"update_partners"]);
Route::post("/modify_firstP",[ParagraphController::class,"update_firstP"]);
Route::post("/modify_secondP",[ParagraphController::class,"update_secondP"]);
Route::post("/modify_thirdP",[ParagraphController::class,"update_thirdP"]);


Route::post("/modify_service",[ServiceController::class,"update"]);
Route::post("/delete_service",[ServiceController::class,"delete"]);


//for admin and managers
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(["prefix"=>"dashboard","middleware"=>"auth"],function(){
    Route::get("/manageContent",function (){
        return view("dorubtechAdmin.manageContentPage");
    })->name("manageContent");

    Route::get("/aboutus",[ParagraphController::class,"get_aboutus"])->name("aboutus-admin");
    Route::get("/addservice",function(){
        return view("dorubtechAdmin.addService");
    })->name("addservice");

    Route::get("/modify_services",[ServiceController::class,"get_all_services"])->name("modify_services");

    Route::get("/modify_paragraphs",[ParagraphController::class,"get_all_paragraphs"])->name("modify_paragraph");
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

//the onl post request for users...
Route::post("/sendEmail",[MessagesController::class,"receive_message"]);

//for guestes users
Route::group([],function(){
    //root
    Route::get("/",[ParagraphController::class,"home_paragraph"])->name("home");

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
            $body=Paragraph::where("for_type","=","partners")->get()->pluck("body")[0];
            return view("dorubtech.ourPartners",[
                "body"=>$body
            ]);
        })->name("ourPartners") ;

        //form contact page...
        Route::get("/contact-us",function (){
            return view("dorubtech.contactUs");
        })->name("contactUs") ;
    });


});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
