<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        //validate
        $UserDetails = request()->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ]);

        //attempt login
        if(! Auth::attempt($UserDetails)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, wrong Credentials.'
            ]);
        }
        //session regeneration(Prevents Session Hijacking)
        request()->session()->regenerate();

        //redirect
        return redirect('/');
    }

    public function destroy(){

        Auth::logout();

        return redirect('/');
    }
}
