<?php

namespace App\Http\Controllers;

use App\Models\Proceso;
use Illuminate\Http\Request;

class ProcesoController extends Controller
{

    public function index()
    {
        return view('Proceso.index');
    }
    public function vistaCrearProceso()
    {
        return view('Proceso.crearProceso');
    }
    public function agregarProceso(Request $request)
    {
        $proceso = new Proceso();
        $proceso -> codigo = $request ->codigo;
        $proceso -> nombre = $request ->codigo;

        $proceso ->save();

        return redirect()->route('proceso');

    }
    public function editarProceso($id)
    {
        $proceso = Proceso::find($id);
        return view('Proceso.editarProceso', compact('proceso'));
    }
    public function actualizarProceso(Request $request, $id)
    {
        $proceso = Proceso::find($id);
        $proceso->codigo = $request->codigo;
        $proceso->nombre = $request->nombre;
        $proceso->descripcion = $request->descripcion;

        $proceso->save();
        return redirect()->route('indexProceso');
    }
    public function eliminarProceso($id)
    {
        $proceso = Proceso::find($id);
        $proceso->delete();

        return redirect()->route('indexProceso')
            ->with('mensaje', 'La localización se ha eliminado correctamente.');
    }
}
