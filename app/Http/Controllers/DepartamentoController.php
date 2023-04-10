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
        return view('Departamento.crearDepartamento', compact('localizaciones'));
    }
    public function agregarDepartamento(Request $request)
    {
        $departamento = new Departamento();
        $departamento->nombre = $request->nombre;
        $departamento->descripcion = $request->descripcion;
        if ($request->has('localizaciones_dptos')) 
        {
            $localizacionesSeleccionadas = $request->input('localizaciones_dptos');
        }
        $localizacionesSeleccionadasString = implode(',', $localizacionesSeleccionadas);

        $departamento->localizaciones_dptos = $localizacionesSeleccionadasString;

        $departamento->save();
        return redirect()->route('indexDepartamento');
    }
    public function editarDepartamento($id)
    {
        $departamentos = Departamento::find($id);
        $localizaciones = Localizacion::all();
        return view('Departamento.editarDepartamento', compact('departamentos','localizaciones'));
    }
    public function actualizarDepartamento(Request $request, $id)
    {
        $departamento = Departamento::find($id);
        $departamento->nombre = $request->nombre;
        $departamento->descripcion = $request->descripcion;

        if ($request->has('localizaciones_dptos')) 
        {
            $localizacionesSeleccionadas = $request->input('localizaciones_dptos');
        }
        $localizacionesSeleccionadasString = implode(',', $localizacionesSeleccionadas);

        $departamento->localizaciones_dptos = $localizacionesSeleccionadasString;

        $departamento->save();
        return redirect()->route('indexDepartamento');
    }
    public function eliminarDepartamento($id)
    {
        $departamento = Departamento::find($id);
        $departamento->delete();

        return redirect()->route('indexDepartamento')
            ->with('mensaje', 'La localización se ha eliminado correctamente.');
    }
}
