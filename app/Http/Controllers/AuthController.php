<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\select;

class AuthController extends Controller
{
    //

    public function registerForm()
    {
        $user = User::all();
        return view("Auth.register", compact('user'));
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|max:255",
            "password" => "required|string|min:6|confirmed",


        ]);

        $data['password'] = bcrypt($request->password);


        User::create($data);

        //login

        return view('auth.login');

        //inter website
        // Auth::login($user);
        // return redirect(url('allbook'));
    }

    public function loginForm()
    {
        $user = User::all();
        return view("Auth.login");
    }


    public function login(Request $request)
    {

        $data = $request->validate([

            "email" => "required|email|max:255",
            "password" => "required|string|min:6",


        ]);

        $valid =   Auth::attempt(['email' => $request->email, 'password' => $request->password]);


        if ($valid) {
            $user =  User::select("name")->where("email", $request->email)->first();

            session()->flash("sucess", "welcome $user->name");
            return redirect(url("books"));
        } else {
            return redirect(url("login"));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url("login"));
    }

    public function allUsers()
    {

        $users = User::all();
        dd($users);
    }
}
