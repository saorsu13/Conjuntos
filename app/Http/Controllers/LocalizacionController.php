<?php

namespace App\Http\Controllers;

use App\Models\Localizacion;
use Illuminate\Http\Request;

class LocalizacionController extends Controller
{
    public function index()
    {
        $localizaciones = Localizacion::all();
        return view('Localizacion.index', compact('localizaciones'));
    }
    public function vistaCrearLocalizacion()
    {
        return view('Localizacion.crearLocalizacion');
    }
    public function agregarLocalizacion(Request $request)
    {

        $localizacion = new Localizacion();
        $localizacion->codigo = $request->codigo;
        $localizacion->nombre = $request->nombre;
        $localizacion->descripcion = $request->descripcion;

        $localizacion->save();
        return redirect()->route('indexLocalizacion');
    }
    public function editarLocalizacion($id)
    {
        $localizacion = Localizacion::find($id);
        return view('Localizacion.editarLocalizacion', compact('localizacion'));
    }
    public function actualizarLocalizacion(Request $request, $id)
    {
        $localizacion = Localizacion::find($id);
        $localizacion->codigo = $request->codigo;
        $localizacion->nombre = $request->nombre;
        $localizacion->descripcion = $request->descripcion;

        $localizacion->save();
        return redirect()->route('indexLocalizacion');
    }
    public function eliminarLocalizacion($id)
    {
        $localizacion = Localizacion::find($id);
        $localizacion->delete();

        return redirect()->route('indexLocalizacion')
            ->with('mensaje', 'La localización se ha eliminado correctamente.');
    }
}
