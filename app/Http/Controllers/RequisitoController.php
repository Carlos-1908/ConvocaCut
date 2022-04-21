<?php

namespace App\Http\Controllers;

use App\Models\Requisito;
use Illuminate\Http\Request;

/**
 * Class RequisitoController
 * @package App\Http\Controllers
 */
class RequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $requisitos = Requisito::paginate();

        return view('requisito.index', compact('requisitos'))
            ->with('i', (request()->input('page', 1) - 1) * $requisitos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $requisito = new Requisito();
        return view('requisito.create', compact('requisito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Requisito::$rules);

        $requisito = Requisito::create($request->all());

        return redirect()->route('requisitos.index')
            ->with('success', 'Requisito created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requisito = Requisito::find($id);

        return view('requisito.show', compact('requisito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requisito = Requisito::find($id);

        return view('requisito.edit', compact('requisito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Requisito $requisito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requisito $requisito)
    {
        request()->validate(Requisito::$rules);

        $requisito->update($request->all());

        return redirect()->route('requisitos.index')
            ->with('success', 'Requisito updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $requisito = Requisito::find($id)->delete();

        return redirect()->route('requisitos.index')
            ->with('success', 'Requisito deleted successfully');
    }
}
