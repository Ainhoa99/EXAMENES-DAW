<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('id', 'desc')->paginate(10);
        return view('alumnos.index', compact('alumnos'));
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
        $request->validate(
            [
                'nombre_apellido' => 'required|max:100',
                'edad' => 'required|integer|min:0',
                'tel' => 'required|max:35',
                'dir' => 'required|max:100',
                'foto' => 'mimes:jpg,png,webp'
            ]
        );

        $alumno = new Alumno($request->all());

        $time = time();

        if (isset($request->foto)) {
            $fileName = $time . '.' . $request->foto->extension();
            $request->foto->move(public_path('img/alumnos'), $fileName);
            $alumno->foto = $fileName;
        } else {
            $alumno->foto = 'default.jpg';
        }

        $alumno->save();

        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);

        $alumno->nombre_apellido = $request->nombre_apellido;
        $alumno->edad = $request->edad;
        $alumno->tel = $request->tel;
        $alumno->dir = $request->dir;

        $alumno->save();

        return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);

        $foto = $alumno->foto;
        if ($foto !== 'default.jpg' && $foto[0] !== 'h') {
            $ruta = public_path('img/alumnos/' . $foto);
            if (file_exists($ruta)) File::delete($ruta);
        }

        $alumno->delete();

        return redirect()->action([AlumnoController::class, 'index'])
            ->with('success', 'El alumno ha sido borrado con éxito');
    }
}
