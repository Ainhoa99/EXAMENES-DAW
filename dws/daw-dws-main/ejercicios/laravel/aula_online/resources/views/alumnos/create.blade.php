@extends('layouts.master')
@section('title', 'Agregar alumno')
@section('content')
    <a href="{{ route('alumnos.index') }}">Ver listado alumnos</a>

    <h2>Nuevo Alumno</h2>

    <form action="{{ route('alumnos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label>Nombres y Apellidos:</label>
            <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos" value="{{ old('nombre_apellido') }}">
            @error('nombre_apellido')
                <p>{{ $message }}</p>
            @enderror

            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Edad" value="{{ old('edad') }}">
            @error('edad')
                <p>{{ $message }}</p><br>
            @enderror

            <label>Teléfono:</label>
            <input type="tel" name="tel" placeholder="Teléfono" value="{{ old('tel') }}">
            @error('tel')
                <p>{{ $message }}</p><br>
            @enderror

            <label>Dirección:</label>
            <input type="text" name="dir" placeholder="Dirección" value="{{ old('dir') }}">
            @error('dir')
                <p>{{ $message }}</p><br>
            @enderror

            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" accept=".jpg,.jpeg,.png,.webp">
            @error('foto')
                <p>{{ $message }}</p><br>
            @enderror
            <div class="container-img-preview"></div>
        </div>

        <input type="submit" value=Guardar>
    </form>
@endsection
