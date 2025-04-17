<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // selecte all from category
    public function allCategory()
    {
        $categories = Category::all();
        return view("Category.all", compact("categories"));
    }

    // selecte one from category frome id =  find()
    public function show($id)
    {
        $category =  Category::find($id);
        return view("Category.show", compact("category"));
    }
}
