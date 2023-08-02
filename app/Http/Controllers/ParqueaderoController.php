<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paqueadero; // Agregamos la referencia al modelo Paqueadero

class PaqueaderoController extends Controller
{
    public function index()
    {
        $paqueaderos = Paqueadero::all(); // Cambiamos el nombre de la variable a plural para seguir convenciones
        return view('paqueadero.index', compact('paqueaderos')); // Ajustamos el nombre de la vista
    }

    public function vistaCrearPaqueadero()
    {
        return view('paqueadero.crearPaqueadero'); // Ajustamos el nombre de la vista
    }

    public function agregarPaqueadero(Request $request)
    {
        $paqueadero = new Paqueadero();
        $paqueadero->numero_parqueadero = $request->numero_parqueadero;
        $paqueadero->descripcion = $request->descripcion;
        $paqueadero->id_propietario = $request->id_propietario;
        $paqueadero->id_vehiculo = $request->id_vehiculo;

        $paqueadero->save();
        return redirect()->route('indexPaqueadero'); // Ajustamos el nombre de la ruta
    }

    public function editarPaqueadero($id)
    {
        $paqueadero = Paqueadero::find($id);
        return view('paqueadero.editarPaqueadero', compact('paqueadero')); // Ajustamos el nombre de la vista
    }

    public function actualizarPaqueadero(Request $request, $id)
    {
        $paqueadero = Paqueadero::find($id);
        $paqueadero->numero_parqueadero = $request->numero_parqueadero;
        $paqueadero->descripcion = $request->descripcion;
        $paqueadero->id_propietario = $request->id_propietario;
        $paqueadero->id_vehiculo = $request->id_vehiculo;

        $paqueadero->save();
        return redirect()->route('indexPaqueadero'); // Ajustamos el nombre de la ruta
    }

    public function eliminarPaqueadero($id)
    {
        $paqueadero = Paqueadero::find($id);
        $paqueadero->delete();

        return redirect()->route('indexPaqueadero')
            ->with('mensaje', 'El paqueadero se ha eliminado correctamente.'); // Ajustamos el nombre de la ruta
    }
}
