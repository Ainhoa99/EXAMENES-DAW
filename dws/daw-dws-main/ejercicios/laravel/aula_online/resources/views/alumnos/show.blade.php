@extends('layouts.master')
@section('title', $alumno->nombre_apellido)
@section('content')
    <a href="{{ route('alumnos.index') }}"> Ver listado Alumnos</a>

    <h2>Ver {{ $alumno->nombre_apellido }}</h2>

    <label><strong>Nombres y Apellidos:</strong> {{ $alumno->nombre_apellido }}</label><br>
    <label><strong>Edad:</strong> {{ $alumno->edad }}</label><br>
    <label><strong>Teléfono:</strong> {{ $alumno->tel }}</label><br>
    <label><strong>Dirección:</strong> {{ $alumno->dir }}</label><br>
@endsection
