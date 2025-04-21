<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // selecte all from category

    //pagination (1- all ,get ->paginate() , 2-view $categories->links(),
    //3- providers (app boot (paginator::use)) )
    public function allCategory()
    {
        // $categories = Category::all();
        $categories = Category::paginate(2);
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
        //
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

        //session successfuly (put , flash ) ;

        // session()->put("success", "data insert successfuly"); // not unset in session
        session()->flash("success", "data insert successfuly"); //-> unset in sesssion



        //redricr
        //1-
        $categories = Category::all();
        return view("Category.all", ["categories" => $categories]);
        //2- route all
        //3-method in action
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

        //update date
        $category =  Category::findOrFail($id);
        $category->update([
            "name" => $request->name,
            "desc" => $request->desc,
        ]);

        // session()->put("success", "data update successfuly ");
        session()->flash("success", "data update successfuly");

        //view
        // return view("Category.show", compact("category"));
        //route
        // return redirect(route("showCategory", $id));
        return redirect(url("showCategory/$id"));
    }


    //delelte

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $categories = Category::all();

        //  session()->put("success", "data delete  successfuly ");
        session()->flash("success", "data delete  successfuly");

        return view("Category.all", ["categories" => $categories]);
    }
}
