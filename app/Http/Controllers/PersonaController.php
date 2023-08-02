<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona; // Agregamos la referencia al modelo Persona

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all(); // Cambiamos el nombre de la variable a plural para seguir convenciones
        return view('persona.index', compact('personas')); // Ajustamos el nombre de la vista
    }

    public function vistaCrearPersona()
    {
        return view('persona.crearPersona'); // Ajustamos el nombre de la vista
    }

    public function agregarPersona(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->email = $request->email;
        $persona->tipo_sangre = $request->tipo_sangre;
        $persona->numero_cedula = $request->numero_cedula;
        $persona->numero_telefono = $request->numero_telefono;
        $persona->sexo = $request->sexo;

        $persona->save();
        return redirect()->route('indexPersona'); // Ajustamos el nombre de la ruta
    }

    public function editarPersona($id)
    {
        $persona = Persona::find($id);
        return view('persona.editarPersona', compact('persona')); // Ajustamos el nombre de la vista
    }

    public function actualizarPersona(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->nombre = $request->nombre;
        $persona->email = $request->email;
        $persona->tipo_sangre = $request->tipo_sangre;
        $persona->numero_cedula = $request->numero_cedula;
        $persona->numero_telefono = $request->numero_telefono;
        $persona->sexo = $request->sexo;

        $persona->save();
        return redirect()->route('indexPersona'); // Ajustamos el nombre de la ruta
    }

    public function eliminarPersona($id)
    {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect()->route('indexPersona')
            ->with('mensaje', 'La persona se ha eliminado correctamente.'); // Ajustamos el nombre de la ruta
    }
}
