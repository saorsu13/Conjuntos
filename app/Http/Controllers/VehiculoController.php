<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo; // Agregamos la referencia al modelo Vehiculo

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all(); // Cambiamos el nombre de la variable a plural para seguir convenciones
        return view('vehiculo.index', compact('vehiculos')); // Ajustamos el nombre de la vista
    }

    public function vistaCrearVehiculo()
    {
        return view('vehiculo.crearVehiculo'); // Ajustamos el nombre de la vista
    }

    public function agregarVehiculo(Request $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->tipo_vehiculo = $request->tipo_vehiculo;
        $vehiculo->placa_vehiculo = $request->placa_vehiculo;
        $vehiculo->cilindraje = $request->cilindraje;
        $vehiculo->id_propietario = $request->id_propietario;

        $vehiculo->save();
        return redirect()->route('indexVehiculo'); // Ajustamos el nombre de la ruta
    }

    public function editarVehiculo($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.editarVehiculo', compact('vehiculo')); // Ajustamos el nombre de la vista
    }

    public function actualizarVehiculo(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->tipo_vehiculo = $request->tipo_vehiculo;
        $vehiculo->placa_vehiculo = $request->placa_vehiculo;
        $vehiculo->cilindraje = $request->cilindraje;
        $vehiculo->id_propietario = $request->id_propietario;

        $vehiculo->save();
        return redirect()->route('indexVehiculo'); // Ajustamos el nombre de la ruta
    }

    public function eliminarVehiculo($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();

        return redirect()->route('indexVehiculo')
            ->with('mensaje', 'El vehículo se ha eliminado correctamente.'); // Ajustamos el nombre de la ruta
    }
}
