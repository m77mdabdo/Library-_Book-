<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test($name1 = "", $name2 = "")
    {
        $fullName = $name1 . "" . $name2;

        return view("test")->with("fullName", $fullName);
    }
}
