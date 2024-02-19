@extends('layouts.master')
@section('title', 'Editar ' . $profesor->nombre_apellido)
@section('content')
    <a href="{{ route('profesores.index') }}"> Ver listado profesores</a>

    <h2>Editar {{ $profesor->nombre_apellido }}</h2>

    <form action="{{ route('profesores.update', $profesor->id) }}" method="POST">
        @csrf

        {{ method_field('PUT') }}

        <div>
            <label>Nombres y apellidos:</label>
            <input type="text" name="nombre_apellido" placeholder="Nombres y apellidos"
                value="{{ $profesor->nombre_apellido }}">

            <label>Teléfono:</label>
            <input type="text" name="tel" placeholder="Teléfono" value="{{ $profesor->tel }}">

            <label>Profesión:</label>
            <input type="text" name="profesion" placeholder="Profesión" value="{{ $profesor->profesion }}">

            <label>Grado académico:</label>
            <input type="text" name="grado_academico" placeholder="Grado académico"
                value="{{ $profesor->grado_academico }}">
        </div>

        <input type="submit" value="Guardar">

    </form>
@endsection
