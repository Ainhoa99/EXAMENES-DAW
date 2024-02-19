@extends('layouts.master')

@section('content')
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Categoría</th>
                <th>Studio</th>
                <th>Año</th>
                <th>Foto</th>
                <th>Botones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($juegos as $juego)
                <tr>
                    <td>{{ $juego->titulo }}</td>
                    <td>{{ $juego->nombre_categoria }}</td>
                    <td>{{ $juego->studio }}</td>
                    <td>{{ $juego->year }}</td>

                    <td>
                        <img src="{{ asset('img/' . $juego->poster) }}">
                    </td>

                    <td>
                        <a href="{{ route('juego.show', $juego->id_juego) }}">Ver</a>
                        <a href="#">Mostrar</a>
                        <a href="{{ route('juego.confirmar', $juego->id_juego) }}">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $juegos->links() }}
@endsection
