<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('nombre_apellido', 'asc')->paginate(4);
        return view('alumnos.index', compact('alumnos'));

        // $alumnos = Alumno::all();
        // return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
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
            'nombre_apellido' => 'required|max:5',
            'edad' => 'required|integer',
        ]);

        $alumno = new Alumno($request->all());
        $alumno->save();

        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show', ['alumno' => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', ['alumno' => $alumno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);

        $alumno->nombre_apellido = $request->nombre_apellido;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;

        $alumno->save();

        return redirect()->action([AlumnoController::class, 'index']);
    }

    public function confirm($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.confirmar', compact('alumno'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return redirect()->action([AlumnoController::class, 'index'])
            ->with('success', 'El alumno  ha sido borrado con éxito');
    }
}
