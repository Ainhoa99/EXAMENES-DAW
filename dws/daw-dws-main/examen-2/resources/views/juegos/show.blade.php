@extends('layouts.master')

@section('content')
    @if (isset($boton) && $boton === 'borrar')
        <h2>Borrar juego</h2>
    @else
        <h2>Ver juego</h2>

        @php
            $boton = 'volver-index';
        @endphp
    @endif


    <x-juego :juego="$juego">
        @if ($boton === 'borrar')
            <form action="{{ route('juego.destroy', $juego->id_juego) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">Borrar</button>
                <a href="{{ route('juego.index') }}">Volver</a>
            </form>
        @else
            <a href="{{ route('filter', ['categoria' => $juego->id_categoria]) }}">Volver</a>
        @endif
    </x-juego>
@endsection
