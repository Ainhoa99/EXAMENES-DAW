@extends('layouts.master')
@section('title', 'alumnos')
@section('content')
    {{-- <a href="{{ route('index') }}">Volver</a> --}}
    <a href="{{ route('alumnos.create') }}">Nuevo alumno</a>

    <h2>Listado de alumnos</h2>

    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped text-center align-middle">
        <thead>
            <tr>
                <th></th>
                <th>Nombre y Apellido</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    @if ($alumno->foto[0] === 'h')
                        <td><img src="{{ $alumno->foto }}" alt="foto {{ $alumno->nombre_apellido }}"></td>
                    @else
                        <td><img src="{{ asset('img/alumnos/' . $alumno->foto) }}" alt="foto {{ $alumno->nombre_apellido }}">
                        </td>
                    @endif
                    <td class="text-start ps-3">{{ $alumno->nombre_apellido }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>{{ $alumno->tel }}</td>
                    <td class="text-start ps-5">{{ $alumno->dir }}</td>
                    <td>
                        {{-- con confirmación --}}
                        {{-- <a href="{{ route('alumnos.show', $alumno->id) }}" >Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" >Editar</a>
                        <a href="{{ route('alumnos.confirm', $alumno->id) }}" >Eliminar</a> --}}

                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" class="btn-group">
                            <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-secondary">Editar</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $alumnos->links() }}
@endsection
