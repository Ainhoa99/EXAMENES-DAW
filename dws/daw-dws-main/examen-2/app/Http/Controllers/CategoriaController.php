<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Juego;

class CategoriaController extends Controller
{

    public function index()
    {
        $juegos = Juego::selectraw('juegos.id as id_juego, titulo, year, studio, poster, synopsis, id_categoria, categorias.nombre as nombre_categoria')
            ->orderby('juegos.id', 'asc')
            ->join('categorias', 'juegos.id_categoria', 'categorias.id')
            ->get();

        return view('index', [
            'juegos' => $juegos,
            'categoria' => ''
         ]);
    }

    public function filter($categoria)
    {
        $juegos = Juego::selectRaw('juegos.id AS id_juego, titulo, year, studio, poster, synopsis, id_categoria, categorias.nombre AS nombre_categoria')
            ->orderBy('juegos.id', 'asc')
        ->whereRaw("juegos.id_categoria like '%$categoria%'")
            ->join('categorias', 'juegos.id_categoria', 'categorias.id')
            ->get();

        return view('index', [
            'juegos' => $juegos,
            'categoria' => $categoria
         ]);
    }
}
