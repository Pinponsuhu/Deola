<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLogin extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }


    public function login(){
        return view('login');
    }

    public function signin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'),$request->remember_me)){
            return back()->with('message','Email or Password Not Correct');
        }
        return redirect('/admin/dashboard');
    }
}
