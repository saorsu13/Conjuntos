<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        return view('Cargo.index');
    }
    
    // public function addCargo(Request $request)
    // {
    //     $cargo=new Cargo();
    //     $cargo->code=$request->codigo;
    //     $cargo->name=$request->nombre;
    //     $cargo->description=$request->options;
       
    // }
}
