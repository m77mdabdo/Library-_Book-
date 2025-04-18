<?php

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

Route::get("categories", [CategoryController::class, "allCategory"]);
Route::get("categories/show/{id}", [CategoryController::class, "show"]);


//create category 2 route -> 1 to the form  2 to insert
Route::get("categories/create", [CategoryController::class, "create"]);
Route::post("categories", [CategoryController::class, "store"]);

//update
Route::get("categories/edite/{id}", [CategoryController::class, "edite"]);
Route::put("categories/update/{id}", [CategoryController::class, "update"]);


Route::delete("categories/delete/{id}", [CategoryController::class, "delete"]);
