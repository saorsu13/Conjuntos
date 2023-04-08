<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos= Cargo::all();
        return view('Cargo.index',compact('cargos'));
    }
    public function vistaCrearCargo()
    {
        $departamentos = Departamento::all();
        return view('Cargo.crearCargo',compact('departamentos'));
    }
    public function agregarCargo(Request $request)
    {
        $departamentos=Departamento::all();
        $cargo = new Cargo();
        
        $cargo->cargo_precedente = $request->cargoPrecedente;
        $cargo ->id_departamento=$departamentos->id_departamento;
        $cargo->nombre = $request->nombre;
        $cargo->descripcion = $request->descripcion;
        $cargo->localizacion_dpto = $request->departamento;

        $cargo->save();
        return redirect()->route('indexCargo');
    }
}
