<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SecurityController extends Controller
{

    public function index()
    {
        return view('Auth.login');
    }
    // public function login(Request $request){
    //     $credentials = [ 'email' => $request->email, 'password' => $request['password'], ];
    //     if (\Auth::attempt($credentials))
    //     { 
    //         \Session::put('tenant',\Auth::user()->tenant_user->tenant->tenant_databases);
    //         return redirect()->route('home'); 
    //     }
    // }
    // public function logout(){
    //     \Auth::logout();
    //     return redirect()->route('login');
    // }
}
