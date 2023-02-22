<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function ceklogin(Request $request){

        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/home');
        }
        return redirect('/login');

    }
    public function logout(Request $request){

        // dd($request->all());
       Auth::logout();
        return redirect('/login');

    }
}
