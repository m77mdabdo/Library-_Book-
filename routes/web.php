<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BOOKController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("ali",[Controller::class,"ali"]);


/////////////  routeing in view /////////////

// Route::get("ali/{name}" ,function($name){
//          echo $name ;
// }) ;
// =>echo next ali



// Route::get("ali/{name ?}" ,function($name=""){
//     echo $name ;
// }) ;
// =>echo next ali && "" = no next ali



// Route::get("ali/{name1?}/{name2?}" ,function($name1="",$name2=""){
//     echo $name1 ." " .$name2 ;
// }) ;
// =>echo next ali && "" = echho next name1

// Route::get("ali/{name1?}/{name2?}" ,function($name1="",$name2=""){
//     $fullName = $name1 . " " . $name2 ;
//     return view('test')->with("fullName",$fullName);

// });

//////////////////////////////////  Routeing in controller  //////////////////////////////


// Route::get("ali/{name1?}/{name2?}", [TestController::class, "test"]);


// Route::get("test", [TestController::class, "test"]);



//crud category

// Route::get("categories", [CategoryController::class, "allCategory"]);
// Route::get("categories/show/{id}", [CategoryController::class, "show"]);


// //create category 2 route -> 1 to the form  2 to insert
// Route::get("categories/create", [CategoryController::class, "create"]);
// Route::post("categories", [CategoryController::class, "store"]);

// //update
// Route::get("categories/edite/{id}", [CategoryController::class, "edite"]);
// Route::put("categories/update/{id}", [CategoryController::class, "update"]);


// Route::delete("categories/delete/{id}", [CategoryController::class, "delete"]);


//gorup category

Route::controller(CategoryController::class)->group(function () {
    Route::get("categories", "allCategory")->name("allCategory");
    Route::get("categories/show/{id}", "show")->name("showCategory");


    //create category 2 route -> 1 to the form  2 to insert
    Route::get("categories/create", "create")->name("creatCategory");
    Route::post("categories", "store")->name("storeCategory");

    //update
    Route::get("categories/edite/{id}", "edite")->name("editeCategory");
    Route::put("categories/update/{id}", "update")->name("updateCategory");

    //delete
    Route::delete("categories/delete/{id}", "delete")->name("deleteCategory");
});


//BOOK

Route::controller(BOOKController::class)->group(function () {
    Route::get("books", "allbook")->name("allbook");
    Route::get("books/show/{id}", "show")->name("showBook");


    //create
    Route::get("books/create", "create")->name("createBook");
    Route::post("book", "store")->name("storeBook");


    //update
    Route::get("books/edite/{id}", "edite")->name("editeBook");
    Route::put("books/update/{id}", "update")->name("updateBook");

    //delete

    Route::delete("books/delete/{id}", "delete")->name("deleteBook");
});


//auth register login logout

Route::controller(AuthController::class)->group(function () {

    //register

    Route::get("register", "registerForm")->name("registerForm");
    Route::post("register", "register")->name("handelRegister");

    //login
    Route::get("login", "loginForm")->name("loginForm");
    Route::post("login", "login")->name("handelLogin");

    //logout form

    Route::post("logout", "logout")->name("logout");
});
