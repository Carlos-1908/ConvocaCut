<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convocatoria;
use App\Models\Requisito;

class ConvocasController extends Controller
{
    public function index()
    {
        $Convoca = Convocatoria::all();
        return view('Convocas',array('Convoca' => $Convoca));
    }

    public function calificar()
    {
        $Calif = Requisito::all();
        return view('calificar',array('Calif' => $Calif));
    }

    public function update(Request $request, $id)
    {
        $estadoC = Requisito::findOrFail($id);
        $estadoC->calificacion = $request->input('calificacion');
        $estadoC->save();

        return redirect()->route('calificar')
            ->with('success', 'Estado actualizado correctamente');
    }
}
