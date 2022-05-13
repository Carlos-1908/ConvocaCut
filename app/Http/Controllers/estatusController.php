<?php

namespace App\Http\Controllers;
use App\Models\Convocatoria;
use Illuminate\Http\Request;

class estatusController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Convocatoria $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $estadoC = Convocatoria::findOrFail($id);
        $estadoC->estatus = $request->input('estado');
        $estadoC->save();

        return redirect()->route('convocatorias.index')
            ->with('success', 'Estado actualizado correctamente');
    }
}
