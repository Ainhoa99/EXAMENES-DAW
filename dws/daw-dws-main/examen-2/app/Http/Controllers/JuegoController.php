<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JuegoController extends Controller
{

    public function index()
    {
        $juegos = Juego::selectRaw('juegos.id as id_juego, titulo, year, studio, poster, synopsis, id_categoria, categorias.nombre as nombre_categoria')
            ->orderby('juegos.id', 'asc')
            ->join('categorias', 'juegos.id_categoria', 'categorias.id')
            ->paginate(5);


        return view('juegos.index', compact('juegos'));
    }

    public function show($id)
    {
        $juego = Juego::selectRaw('juegos.id as id_juego, titulo, year, studio, poster, synopsis, id_categoria, categorias.nombre as nombre_categoria') ->where('juegos.id', $id)
            ->join('categorias', 'juegos.id_categoria', 'categorias.id')
            ->first();

        return view('juegos.show', [ 'juego' => $juego ]);
    }

    public function confirmarDestroy($id)
    {
        $juego = Juego::selectRaw('juegos.id as id_juego, titulo, year, studio, poster, synopsis, id_categoria, categorias.nombre as nombre_categoria') ->where('juegos.id', $id)
            ->join('categorias', 'juegos.id_categoria', 'categorias.id')
            ->first();

        return view('juegos.show', [ 'juego' => $juego, 'boton' => 'borrar' ]);
    }

    public function destroy($id)
    {
        $juego = Juego::findOrFail($id);

        $foto = $juego->poster;

        $ruta = public_path('img/' . $foto);
        if (file_exists($ruta)) File::delete($ruta);

        $juego->delete();

        return redirect()->action([JuegoController::class, 'index'])
            ->with('success', 'El juego ' . $juego->titulo . ' ha sido borrado con éxito, y la imagen ' . $juego->poster . ' ha sido borrada de la carpeta img');
    }
}
