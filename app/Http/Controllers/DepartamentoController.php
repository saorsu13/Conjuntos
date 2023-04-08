<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Localizacion;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();
        return view('Departamento.index', compact('departamentos'));
    }
    public function vistaCrearDepartamento()
    {
        $localizaciones = Localizacion::all();
        return view('Departamento.crearDepartamento',compact('localizaciones'));
    }
    public function agregarDepartamento(Request $request)
    {
        $departamento = new Departamento();
        $departamento->nombre = $request->nombre;
        $departamento->descripcion = $request->descripcion;
        // Obtener las selecciones del elemento select como un arreglo
    if($request->has('localizaciones_dptos')){
        $localizacionesSeleccionadas = $request->input('localizaciones_dptos');
    }
    // Convertir el arreglo de selecciones en una cadena separada por comas
    $localizacionesSeleccionadasString = implode(',', $localizacionesSeleccionadas);
    
    // Almacenar la cadena de selecciones en el modelo Departamento
    $departamento->localizaciones_dptos = $localizacionesSeleccionadasString;

        $departamento->save();
        return redirect()->route('indexDepartamento');
    }
}
