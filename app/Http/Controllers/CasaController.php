<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa; // Agregamos la referencia al modelo Casa

class CasaController extends Controller
{
    public function index()
    {
        $casas = Casa::all(); // Cambiamos el nombre de la variable a plural para seguir convenciones
        return view('casa.index', compact('casas')); // Ajustamos el nombre de la vista
    }

    public function vistaCrearCasa()
    {
        return view('casa.crearCasa'); // Ajustamos el nombre de la vista
    }

    public function agregarCasa(Request $request)
    {
        $casa = new Casa();
        $casa->numero_casa = $request->numero_casa;
        $casa->arrendado = $request->arrendado;
        $casa->venta = $request->venta;

        $casa->save();
        return redirect()->route('indexCasa'); // Ajustamos el nombre de la ruta
    }

    public function editarCasa($id)
    {
        $casa = Casa::find($id);
        return view('casa.editarCasa', compact('casa')); // Ajustamos el nombre de la vista
    }

    public function actualizarCasa(Request $request, $id)
    {
        $casa = Casa::find($id);
        $casa->numero_casa = $request->numero_casa;
        $casa->arrendado = $request->arrendado;
        $casa->venta = $request->venta;

        $casa->save();
        return redirect()->route('indexCasa'); // Ajustamos el nombre de la ruta
    }

    public function eliminarCasa($id)
    {
        $casa = Casa::find($id);
        $casa->delete();

        return redirect()->route('indexCasa')
            ->with('mensaje', 'La casa se ha eliminado correctamente.'); // Ajustamos el nombre de la ruta
    }
}
