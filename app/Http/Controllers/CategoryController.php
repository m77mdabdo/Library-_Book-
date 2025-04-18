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

    public function create()
    {
        return view("Category.create ");
    }

    public function store(Request $request)
    {
        //catech data  ->Request $request

        //validation
        $data = $request->validate([
            "name" => 'required|string|max:255',
            "desc" => "required|string",
        ]);

        //store in data base

        Category::create([
            "name" => $request->name,
            "desc" => $request->desc,

        ]);

        //redricr
        $category = Category::all();
        return view("Category.all", ["category" => $category]);
    }

    public function edite($id)
    {
        $category = Category::findOrFail($id);
        return view("Category.update ", ["category" => $category]);
    }

    public function update($id, Request $request)
    {

        //catch data

        //valdation
        $data = $request->validate([

            "name" => "required|string|max:200",
            "desc" => "required| string",
        ]);

        $category =  Category::findOrFail($id);
        $category->update([
            "name" => $request->name,
            "desc" => $request->desc,
        ]);
        return view("Category.show", compact("category"));
    }


    //delelte

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $categories = Category::all();
        return view("Category.all", ["categories" => $categories]);
    }
}