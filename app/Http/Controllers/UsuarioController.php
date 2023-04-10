<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
       $usuarios = Usuario::all();

        return view('Usuarios.index',compact('usuarios'));
    }
    public function vistaCrearUsuario()
    {
        return view('Usuarios.crearUsuario');
    }
    public function agregarUsuario(Request $request)
    {
        $usuario = new Usuario();
        $usuario->localizacion_id=3;
        $usuario->activo=$request->activo == 'on' ? 1 : 0;
		$usuario->nombre=$request->nombre;
		$usuario->correo_electronico=$request->correoElectronico;
		$usuario->contraseña=$request->contraseña;
		$usuario->rol=$request->rol;
        $usuario->cargo=$request->cargo;
		$usuario->localizacion_usuario=$request->localizacionUsuario;
		
        $usuario->save();

        return redirect()->route('indexUsuario',compact('usuario'));

    }
}
