<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;

/**
 * Class ConvocatoriaController
 * @package App\Http\Controllers
 */
class ConvocatoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convocatorias = Convocatoria::paginate();

        return view('convocatoria.index', compact('convocatorias'))
            ->with('i', (request()->input('page', 1) - 1) * $convocatorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $convocatoria = new Convocatoria();
        return view('convocatoria.create', compact('convocatoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Convocatoria::$rules);

        $convocatoria = Convocatoria::create($request->all());

        return redirect()->route('convocatorias.index')
            ->with('success', 'Convocatoria creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $convocatoria = Convocatoria::find($id);

        return view('convocatoria.show', compact('convocatoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convocatoria = Convocatoria::find($id);

        return view('convocatoria.edit', compact('convocatoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Convocatoria $convocatoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convocatoria $convocatoria)
    {
        request()->validate(Convocatoria::$rules);

        $convocatoria->update($request->all());

        return redirect()->route('convocatorias.index')
            ->with('success', 'Convocatoria actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $convocatoria = Convocatoria::find($id)->delete();

        return redirect()->route('convocatorias.index')
            ->with('success', 'Convocatoria eliminada correctamente');
    }
}
