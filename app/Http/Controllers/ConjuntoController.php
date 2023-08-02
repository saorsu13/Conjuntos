<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConjuntoController extends Controller
{
    public function index(){
        return view('Conjunto.index');
    }
}
