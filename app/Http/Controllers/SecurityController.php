<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SecurityController extends Controller
{

    public function index()
    {
        return view('Auth.login');
    }
    public function login(Request $request){
        $credentials = [ 'email' => $request->email, 'password' => $request['password']];
        if (\Auth::attempt($credentials))
        { 
            return redirect()->route('home'); 
        }
        else{
            echo('Usuario Invalido');
        }
    }
    public function logout(){
        \Auth::logout();
        return redirect()->route('login');
    }
}
