@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
    <h1>index</h1>

    <nav>
        <ul>
            <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
            <li><a href="{{ route('profesores.index') }}">Profesores</a></li>
            <li><a href="{{ route('cursos.index') }}">alumnos</a></li>
        </ul>
    </nav>
@endsection
