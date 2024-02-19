@extends('layouts.master')
@section('title', 'Profesores')
@section('content')
    {{-- <a href="{{ route('/') }}">Volver</a> --}}
    <a href="{{ route('alumnos.create') }}">Nuevo profesor</a>

    <h2>Listado de profesores</h2>

    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Teléfono</th>
                <th>Profesión</th>
                <th>Grado Académico</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($profesores as $profesor)
                <tr>
                    <td class="text-left">{{ $profesor->nombre_apellido }}</td>
                    <td>{{ $profesor->tel }}</td>
                    <td>{{ $profesor->profesion }}</td>
                    <td>{{ $profesor->grado_academico }}</td>
                    <td>
                        <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST">
                            <a href="{{ route('profesores.show', $profesor->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('profesores.edit', $profesor->id) }}" class="btn btn-secondary">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $profesores->links() }}
@endsection
