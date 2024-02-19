@extends('layouts.master')

@section('content')
    <nav class="nav--cat">
        <ul>
            <li><a href="{{ route('index') }}" @class(['activo' => $categoria === ''])>Todas</a></li>
            <li><a href="{{ route('filter', ['categoria' => '1']) }}" @class(['activo' => $categoria === '1'])>Acción</a></li>
            <li><a href="{{ route('filter', ['categoria' => '2']) }}" @class(['activo' => $categoria === '2'])>Aventura</a></li>
            <li><a href="{{ route('filter', ['categoria' => '3']) }}" @class(['activo' => $categoria === '3'])>Deportes</a></li>
            <li><a href="{{ route('filter', ['categoria' => '4']) }}" @class(['activo' => $categoria === '4'])>Conducción</a></li>
            <li><a href="{{ route('filter', ['categoria' => '5']) }}" @class(['activo' => $categoria === '5'])>Plataformas</a></li>
        </ul>
    </nav>

    <main class="index--juegos">
        @php
            $counter = 0;
        @endphp

        @forelse ($juegos as $juego)
            <x-juego :juego="$juego" boton="seleccionar">
                <a href="{{ route('juego.show', $juego->id_juego, 'index') }}">Seleccionar</a>
            </x-juego>

            @if (++$counter === 3)
                @php
                    $counter = 0;
                @endphp

                <hr>
            @endif
        @empty
            <h1>no hay juegos en esta categoría</h1>
        @endforelse
    </main>
@endsection
