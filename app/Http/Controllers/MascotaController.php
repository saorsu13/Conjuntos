<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota; // Agregamos la referencia al modelo Mascota

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all(); // Cambiamos el nombre de la variable a plural para seguir convenciones
        return view('mascota.index', compact('mascotas')); // Ajustamos el nombre de la vista
    }

    public function vistaCrearMascota()
    {
        return view('mascota.crearMascota'); // Ajustamos el nombre de la vista
    }

    public function agregarMascota(Request $request)
    {
        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;
        $mascota->tipo_mascota = $request->tipo_mascota;
        $mascota->raza_mascota = $request->raza_mascota;
        $mascota->id_propietario = $request->id_propietario;

        $mascota->save();
        return redirect()->route('indexMascota'); // Ajustamos el nombre de la ruta
    }

    public function editarMascota($id)
    {
        $mascota = Mascota::find($id);
        return view('mascota.editarMascota', compact('mascota')); // Ajustamos el nombre de la vista
    }

    public function actualizarMascota(Request $request, $id)
    {
        $mascota = Mascota::find($id);
        $mascota->nombre = $request->nombre;
        $mascota->tipo_mascota = $request->tipo_mascota;
        $mascota->raza_mascota = $request->raza_mascota;
        $mascota->id_propietario = $request->id_propietario;

        $mascota->save();
        return redirect()->route('indexMascota'); // Ajustamos el nombre de la ruta
    }

    public function eliminarMascota($id)
    {
        $mascota = Mascota::find($id);
        $mascota->delete();

        return redirect()->route('indexMascota')
            ->with('mensaje', 'La mascota se ha eliminado correctamente.'); // Ajustamos el nombre de la ruta
    }
}
