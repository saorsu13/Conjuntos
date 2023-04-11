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
        
        $cargo = new Cargo();
        $cargo->cargo_precedente = $request->cargoPrecedente;
        $cargo ->id_departamento=$request->id_departamento;
        $cargo->nombre = $request->nombre;
        $cargo->descripcion = $request->descripcion;
        $cargo->localizacion_dpto = $request='medellin';

        $cargo->save();
        return redirect()->route('indexCargo');
    }
    public function editarCargo($id)
    {
        $cargo = Cargo::find($id);
        $departamentos = Departamento::all();
        return view('Cargo.editarCargo', compact('cargo','departamentos'));
    }
    public function actualizarCargo(Request $request, $id)
    {
        $cargo = Cargo::find($id);
        $cargo->cargo_precedente = $request->cargoPrecedente;
        $cargo ->id_departamento=$request->id_departamento;
        $cargo->nombre = $request->nombre;
        $cargo->descripcion = $request->descripcion;
        $cargo->localizacion_dpto = $request='medellin';

        $cargo->save();
        return redirect()->route('indexCargo');
    }
    public function eliminarCargo($id)
    {
        $cargo = Cargo::find($id);
        $cargo->delete();

        return redirect()->route('indexCargo')
            ->with('mensaje', 'La localización se ha eliminado correctamente.');
    }
}
