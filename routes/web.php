<?php

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


Route::get("ali/{name1?}/{name2?}",[TestController::class,"test"]);