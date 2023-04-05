<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        //  $usuarios = User::GetUser(\Auth::user()->tenant_user->tenant_id)->get();
        return view('usuario.usuario-index');
    }
}
