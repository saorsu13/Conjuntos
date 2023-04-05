<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departments=Departamento::all();
        return view('Departamento.index',compact('departamentos'));
    }
    public function createDepartment()
    {
        return view('Departamento.createDepartamento');
    }
    // public function addDepartemnt(Request $request)
    // {
    //     $departamento=new Departamento();
    //     $departamento->name=$request->nombre;
	// 	$departamento->description=$request->descripcion;

    //     $departamento->save();
    //     return redirect()->route('indexDepartamentos');
    // } 
}
