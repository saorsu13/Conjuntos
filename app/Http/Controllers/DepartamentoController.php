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
        $Localizaciones = Localizacion::all();
        return view('Departamento.crearDepartamento', compact('Localizaciones'));
    }
    public function agregarDepartamento(Request $request)
    {
        $departamento = new Departamento();
        $departamento->nombre = $request->nombre;
        $departamento->descripcion = $request->descripcion;
        if ($request->has('Localizaciones_dptos')) 
        {
            $LocalizacionesSeleccionadas = $request->input('Localizaciones_dptos');
        }
        $LocalizacionesSeleccionadasString = implode(',', $LocalizacionesSeleccionadas);

        $departamento->Localizaciones_dptos = $LocalizacionesSeleccionadasString;

        $departamento->save();
        return redirect()->route('indexDepartamento');
    }
    public function editarDepartamento($id)
    {
        $departamentos = Departamento::find($id);
        $Localizaciones = Localizacion::all();
        return view('Departamento.editarDepartamento', compact('departamentos','Localizaciones'));
    }
    public function actualizarDepartamento(Request $request, $id)
    {
        $departamento = new Departamento();
        $departamento->nombre = $request->nombre;
        $departamento->descripcion = $request->descripcion;
        if ($request->has('Localizaciones_dptos')) 
        {
            $LocalizacionesSeleccionadas = $request->input('Localizaciones_dptos');
        }
        $LocalizacionesSeleccionadasString = implode(',', $LocalizacionesSeleccionadas);

        $departamento->Localizaciones_dptos = $LocalizacionesSeleccionadasString;

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
