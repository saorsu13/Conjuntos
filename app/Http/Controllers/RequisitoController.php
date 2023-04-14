<?php

namespace App\Http\Controllers;

use App\Models\Requisito;
use Illuminate\Http\Request;

class RequisitoController extends Controller
{
    public function index()
    {

        $requisitos = Requisito::all();
        return view('Requisito.index', compact('requisitos'));
    }
}
