<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
         $usuarios = User::GetUser(\Auth::user()->tenant_user->tenant_id)->get();
        return view('user.user-index',compact('usuarios'));
    }
}
