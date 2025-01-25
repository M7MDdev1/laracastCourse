<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }
    public function store(){
        //Validation
        $attributes = Request()->validate([
            "name" => ['required', 'min:3'],
            "email" => ['required', 'min:3', 'email'],
            "password" => ['required',Password::min(3),'confirmed']
        ]);
        //Create user
        $user = User::create(
            $attributes
        );
        //login
        Auth::login($user);
        //redirect
        return redirect('/');

    }
}
