<?php

namespace App\Http\Controllers;

use App\Models\BOOK;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BOOKController extends Controller
{
    public function allbook()
    {
        $books = BOOK::all();
        $books = BOOK::paginate(2);
        return view("Book.all", ["books" => $books]);
    }

    public function show($id)
    {
        $book = BOOK::findOrFail($id);
        return view("Book.show", compact("book"));
    }

    public function  create()
    {
        $categories = Category::all();
        return view("Book.create", compact("categories"));
    }

    public function store(Request $request)
    {

        //validation
        $data = $request->validate([
            "title" => 'required|string|max:255',
            "desc" => "required|string",
            "price" => "required|numeric",
            "image" => "required|image |mimes:png,jpg,gif,jpeg",
            "category_id" => "required|numeric|exists:categories,id",

        ]);

        $data['image'] = Storage::putFile("Books", $request->image);

        $data['user_id'] = 1;
        BOOK::create($data);
        session()->flash("success", "data insert successfuly");
        return redirect(url("books"));
    }

    public function edite($id)
    {
        $categories = Category::all();
        $book = BOOK::findOrFail($id);
        return view("Book.update", compact("book", "categories"));
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            "title" => 'required|string|max:255',
            "desc" => "required|string",
            "price" => "required|numeric",
            "image" => "image|mimes:png,jpg,gif,jpeg",
            "category_id" => "required|numeric|exists:categories,id",
        ]);

        $book = BOOK::findOrFail($id);

        if ($request->hasFile("image")) {

            Storage::delete($book->image);

            $data['image'] = Storage::putFile("Books", $request->image);
        } else {

            $data['image'] = $book->image;
        }


        $book->update($data);

        session()->flash("success", "Data updated successfully");

        return redirect()->route("showBook", $book->id);
    }

    public function delete($id)
    {
        $book = BOOK::findOrFail($id);
        Storage::delete($book->image);
        $book->delete();
        // $categories = Category::all();

        //  session()->put("success", "data delete  successfuly ");
        session()->flash("success", "data delete  successfuly");

        // return view("Category.all", ["categories" => $categories]);
        return  redirect(url("books"));
    }
}