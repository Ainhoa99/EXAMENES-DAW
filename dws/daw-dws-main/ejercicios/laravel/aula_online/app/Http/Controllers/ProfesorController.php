<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::orderBy('nombre_apellido', 'asc')->paginate(10);
        return view('profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_apellido' => 'required|max:100',
            'grado_academico' => 'required|max:100',
            'profesion' => 'required|max:30',
            'tel' => 'required|max:35',
        ]);

        $profesor = new Profesor($request->all());
        $profesor->save();

        return redirect()->action([ProfesorController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $profesor = new Profesor($request->all());
        $profesor->save();

        return redirect()->action([ProfesorController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();

        return redirect()->action([ProfesorController::class, 'index'])
            ->with('success', 'El profesor ha sido borrado con éxito');
    }
}
