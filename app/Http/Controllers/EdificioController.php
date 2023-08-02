<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edificio; // Agregamos la referencia al modelo Edificio

class EdificioController extends Controller
{
    public function index()
    {
        $edificios = Edificio::all(); // Cambiamos el nombre de la variable a plural para seguir convenciones
        return view('edificio.index', compact('edificios')); // Ajustamos el nombre de la vista
    }

    public function vistaCrearEdificio()
    {
        return view('edificio.crearEdificio'); // Ajustamos el nombre de la vista
    }

    public function agregarEdificio(Request $request)
    {
        $edificio = new Edificio();
        $edificio->direccion = $request->direccion;

        $edificio->save();
        return redirect()->route('indexEdificio'); // Ajustamos el nombre de la ruta
    }

    public function editarEdificio($id)
    {
        $edificio = Edificio::find($id);
        return view('edificio.editarEdificio', compact('edificio')); // Ajustamos el nombre de la vista
    }

    public function actualizarEdificio(Request $request, $id)
    {
        $edificio = Edificio::find($id);
        $edificio->direccion = $request->direccion;

        $edificio->save();
        return redirect()->route('indexEdificio'); // Ajustamos el nombre de la ruta
    }

    public function eliminarEdificio($id)
    {
        $edificio = Edificio::find($id);
        $edificio->delete();

        return redirect()->route('indexEdificio')
            ->with('mensaje', 'El edificio se ha eliminado correctamente.'); // Ajustamos el nombre de la ruta
    }
}
