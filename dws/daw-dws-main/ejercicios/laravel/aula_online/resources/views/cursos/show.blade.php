@extends('layouts.master')
@section('title', $alumno->nombre_apellido)
@section('content')
    <a href="{{ route('profesores.index') }}"> Ver listado profesores</a>

    <h2>Ver {{ $profesor->nombre_apellido }}</h2>

    <label><strong>Nombres y Apellidos:</strong> {{ $profesor->nombre_apellido }}</label><br>
    <label><strong>Teléfono:</strong> {{ $profesor->tel }}</label><br>
    <label><strong>Profesión:</strong> {{ $profesor->profesion }}</label><br>
    <label><strong>Grado académico:</strong> {{ $profesor->grado_academico }}</label><br>
@endsection
