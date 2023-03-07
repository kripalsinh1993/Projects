<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RapidController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AddCategoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\AddProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//contact us  view route

// Route:: get('/',function(){
//     return view('contactus');       
// });

// Route:: get('/gallery',function(){
//     return view('gallery');       
// });

// Route:: get('/our-services',function(){
//     return view('ourservices');       
// });

// Route:: get('/account',function(){
//     return view('account');       
// });


//template integrations


Route::get("/",[HomeController::class,'index']);


Route::get("/about",function(){

    return view("rapid.about");
});

Route::get("/services",function(){

    return view("rapid.services");
});

Route::get("/portfolio",function(){

    return view("rapid.portfolio");
});

Route::get("/team",function(){

    return view("rapid.team");
});


Route::get("/contact",function(){

    return view("rapid.contact");
});

//contact page routing
Route::get("/contact",[ContactController::class,'index']);

Route::post("/contact",[ContactController::class,'store']);

//register page routing
Route::get("/register",[RegisterController::class,'index']);
Route::post("/register",[RegisterController::class,'store']);


//admin routing here

Route::get("/admin-login",[AdminLoginController::class,"index"]);
Route::get("/admin-login/admin-dashboard",[AdminDashboardController::class,"index"]);

//manage contact routing here
Route::get("/admin-login/managecontact",[ContactController::class,"show"]);
Route::get("/admin-login/managecontact/{id}",[ContactController::class,"destroy"]);

// manage customer routing here

Route::get("/admin-login/managecustomer",[RegisterController::class,"show"]);
Route::get("/admin-login/managecustomer/{id}",[RegisterController::class,"destroy"]);

// admin category routing here
Route::get("/admin-login/admin-addcategory",[AddCategoryController::class,"index"]);
Route::post("/admin-login/admin-addcategory",[AddCategoryController::class,'store']);
Route::get("/admin-login/admin-managecategory",[AddCategoryController::class,"show"]);
Route::get("/admin-login/admin-managecategory/{id}",[AddCategoryController::class,"destroy"]);
Route::get("/admin-login/admin-editcategory/{id}",[AddCategoryController::class,'edit']);
Route::post("/admin-login/admin-editcategory/{id}",[AddCategoryController::class,'update']);
 
//admin subcategory routing here
Route::get("/admin-login/admin-addsubcategory",[SubCategoryController::class,"index"]);
Route::post("/admin-login/admin-addsubcategory",[SubCategoryController::class,"store"]);
Route::get("/admin-login/admin-managesubcategory",[SubCategoryController::class,"show"]);
Route::get("/admin-login/admin-managesubcategory/{id}",[SubCategoryController::class,"destroy"]);
Route::get("/admin-login/admin-editsubcategory/{id}",[SubCategoryController::class,'edit']);
Route::post("/admin-login/admin-editsubcategory/{id}",[SubCategoryController::class,'update']);

//admin product routing here

Route::get("/admin-login/admin-addproduct",[AddProductController::class,"index"]);
Route::post("/admin-login/admin-addproduct",[AddProductController::class,"store"]);
Route::get("/admin-login/admin-manageproduct",[AddProductController::class,"show"]);
Route::get("/admin-login/admin-manageproduct/{id}",[AddProductController::class,"destroy"]);
Route::get("/admin-login/admin-editproduct/{id}",[AddProductController::class,'edit']);
Route::post("/admin-login/admin-editproduct/{id}",[AddProductController::class,'update']);