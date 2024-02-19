@extends('layouts.master')
@section('title', 'Editar' . $alumno->nombre_apellido)
@section('content')
    <a href="{{ route('alumnos.index') }}"> Ver listado Alumnos</a>

    <h2>Editar {{ $alumno->nombre_apellido }}</h2>

    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf

        {{ method_field('PUT') }}

        <div>
            <label>Nombres y Apellidos:</label>
            <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos"
                value="{{ $alumno->nombre_apellido }}">

            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Edad" value="{{ $alumno->edad }}">

            <label>Teléfono:</label>
            <input type="text" name="tel" placeholder="Teléfono" value="{{ $alumno->tel }}">

            <label>Dirección:</label>
            <input type="text" name="dir" placeholder="Dirección" value="{{ $alumno->dir }}">
        </div>

        <input type="submit" value="Guardar">

    </form>
@endsection
