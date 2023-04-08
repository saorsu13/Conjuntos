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
        $process = new Proceso();
        $process -> code = $request ->codigo;
        $process -> name = $request ->codigo;
        $process -> version = $request ->codigo;
        $process -> target = $request=1;
        $process -> requirement_client = $request=1;
        $process -> requirement_company = $request=1;
        $process -> requirement_legal = $request=1;
        $process -> sources = $request=1;
        $process -> risk_client = $request=1;
        $process -> risk_company = $request=1;
        $process -> risk_legal = $request=1;
        $process -> position_id = $request =1;


        $process ->save();

        return redirect()->route('process');

    }
}
