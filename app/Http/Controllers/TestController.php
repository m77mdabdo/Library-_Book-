<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    // public function test($name1 = "", $name2 = "")
    // {
    //     $fullName = $name1 . "" . $name2;

    //     // with
    //     // return view("test")->with("fullName", $fullName);


    //     //[ "key"=>"value"]
    //     // return view("test", ["data" => "$fullName"]);

    //     //compact
    //     // return view("test", compact("fullName"));
    // }
    public function test()
    {

        //database existed use

        //all posts
        // $posts =  DB::table("posts")->get();
        // dd($posts);



        //select titil body
        // $posts = DB::table("posts")->select('title')->get();

        // return view("test", ["posts" => $posts]);


        // select tow query
        // $data = DB::table("posts")->select('title', 'body');
        // $posts = $data->get();
        // $allPosts = $data->addSelect('image')->get();


        // return view("test", ["posts" => $posts, "allPosts" => $allPosts]);


        /////////// select * from posts where id  >3 and userd_id =1  ;

        // $posts = DB::table("posts")->where("id", ">", "50")->where("user_id", 1)->get();
        // return view("test", ["posts" => $posts]);



        /////////// select * from posts where id  >3 or userd_id =1  ;

        // $posts = DB::table("posts")->where("id", ">", "50")->orwhere("user_id", 1)->get();
        // return view("test", ["posts" => $posts]);



        /////  select * from posts orderBy id desc limit = 1

        // $posts = DB::table("posts")->orderBy("id", "desc")->limit(3)->get();
        // return view("test", ["posts" => $posts]);


        // the last post

        // $posts = DB::table("posts")->orderBy("id", "desc")->limit(1)->get();
        // return view("test", ["posts" => $posts]);
    }
}
