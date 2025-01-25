<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class sessionController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function store(){
        //Validation
        $attributes = Request()->validate([
            "email" => ['required', 'min:3', 'email'],
            "password" => ['required']
        ]);

        //login
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);

        }

        request()->session()->regenerate();
        //redirect
        return redirect('/');

    }
    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
