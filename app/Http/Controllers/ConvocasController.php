<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convocatoria;

class ConvocasController extends Controller
{
    public function index()
    {
        $Convoca = Convocatoria::all();
        return view('Convocas',array('Convoca' => $Convoca));
    }
}
