<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartamento; // Agregamos la referencia al modelo Apartamento

class ApartamentoController extends Controller
{
    public function index()
    {
        $apartamentos = Apartamento::all(); // Cambiamos el nombre de la variable a plural para seguir convenciones
        return view('apartamento.index', compact('apartamentos')); // Ajustamos el nombre de la vista
    }

    public function vistaCrearApartamento()
    {
        return view('apartamento.crearApartamento'); // Ajustamos el nombre de la vista
    }

    public function agregarApartamento(Request $request)
    {
        $apartamento = new Apartamento();
        $apartamento->numero_apartamento = $request->numero_apartamento;
        $apartamento->descripcion = $request->descripcion;
        $apartamento->arrendando = $request->arrendando;
        $apartamento->venta = $request->venta;

        $apartamento->save();
        return redirect()->route('indexApartamento'); // Ajustamos el nombre de la ruta
    }

    public function editarApartamento($id)
    {
        $apartamento = Apartamento::find($id);
        return view('apartamento.editarApartamento', compact('apartamento')); // Ajustamos el nombre de la vista
    }

    public function actualizarApartamento(Request $request, $id)
    {
        $apartamento = Apartamento::find($id);
        $apartamento->numero_apartamento = $request->numero_apartamento;
        $apartamento->descripcion = $request->descripcion;
        $apartamento->arrendando = $request->arrendando;
        $apartamento->venta = $request->venta;

        $apartamento->save();
        return redirect()->route('indexApartamento'); // Ajustamos el nombre de la ruta
    }

    public function eliminarApartamento($id)
    {
        $apartamento = Apartamento::find($id);
        $apartamento->delete();

        return redirect()->route('indexApartamento')
            ->with('mensaje', 'El apartamento se ha eliminado correctamente.'); // Ajustamos el nombre de la ruta
    }
}
