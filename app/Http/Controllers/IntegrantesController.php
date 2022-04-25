<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integrantes;

class IntegrantesController extends Controller
{
    public function index()
    {
        $Integrantes = Integrantes::all();
        return view('DatosEquipos',array('DatosEquipos' => $Integrantes));
    }
}