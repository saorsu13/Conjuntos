<?php

namespace App\Http\Controllers;

use App\Models\Requisito;
use Illuminate\Http\Request;

class RequisitoController extends Controller
{
    public function index()
    {
        $requisitos = Requisito::all();
        return view('Requisito.index', compact('requisitos'));
    }
    public function vistaCrearRequisito()
    {
        return view('Requisito.crearRequisito');
    }
    public function agregarRequisito(Request $request)
    {
        $requisito = new Requisito();
        $requisito -> nombre=$request-> nombre;
        $requisito -> codigo=$request -> codigo;
        $requisito -> descripcion=$request -> descripcion;

        $requisito ->save();
        return redirect()->route('indexRequisito');
    }
    public function editarRequisito($id)
    {
        $requisito=Requisito::find($id);
        return view('Requisito.editarRequisito',compact('requisito'));
    }
    public function actualizarRequisito(Request $request,$id)
    {
        $requisito = Requisito::find($id);
        $requisito -> nombre=$request-> nombre;
        $requisito -> codigo=$request -> codigo;
        $requisito -> descripcion=$request -> descripcion;

        $requisito -> save();
        return redirect()->route('indexRequisito');
    }

}
