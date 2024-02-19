@extends('layouts.master')
@section('title', 'Agregar curso')
@section('content')
    <a href="{{ route('profesores.index') }}">Ver listado profesores</a>

    <h2>Nuevo profesor</h2>

    <form action="{{ route('profesores.store') }}" method="POST">
        @csrf

        <div>
            <label>Nombres y Apellidos:</label>
            <input type="text" name="nombre_apellido" placeholder="Nombres y apellidos" value="{{ old('nombre_apellido') }}">
            @error('nombre_apellido')
                <p>{{ $message }}</p>
            @enderror

            <label>Teléfono:</label>
            <input type="tel" name="tel" placeholder="Teléfono" value="{{ old('tel') }}">
            @error('tel')
                <p>{{ $message }}</p>
            @enderror

            <label>Profesión:</label>
            <input type="text" name="profesion" placeholder="Profesión" value="{{ old('profesion') }}">
            @error('profesion')
                <p>{{ $message }}</p>
            @enderror

            <label>Grado académico:</label>
            <input type="text" name="grado_academico" placeholder="Grado académico" value="{{ old('grado_academico') }}">
            @error('grado_academico')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value=Guardar>
    </form>
@endsection
