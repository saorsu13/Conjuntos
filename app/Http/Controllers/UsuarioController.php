<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        // $usuarios = User::GetUser(\Auth::user()->tenant_user->tenant_id)->get();

        return view('Usuarios.index');
    }
    public function vistaCrearUsuario()
    {
        return view('Usuarios.crearUsuario');
    }
    // public function addUsers(Request $request)
    // {
    //     $users = new User();
    //     $users->active=$request->activo;
	// 	$users->name=$request->nombre;
    //     $users->options=$request->options;
    //     $users ->user_uid=$request->nombreUsuario;
	// 	$users->email=$request->correoElectronico;
	// 	$users->password=$request->contraseña;
	// 	$users->role=$request->rol;
		
    //     $users->save();

    //     return redirect()->route('indexUsuarios',compact('users'));

    // }
}
