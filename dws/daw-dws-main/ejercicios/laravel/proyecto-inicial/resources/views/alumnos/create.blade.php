<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('alumnos.index') }}"> Ver listado Alumnos</a>

    <h2>Nuevo Alumno</h2>

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf

        <div class="row">
            <label>Nombres y Apellidos:</label>
            <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos"
                value="{{ old('nombre_apellido') }}">
            @error('nombre_apellido')
                <p class="error-message">{{ $message }}</p>
            @enderror

            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Edad" value="{{ old('edad') }}">
            @error('edad')
                <p class="error-message">{{ $message }}</p><br>
            @enderror

            <label>Teléfono:</label>
            <input type="text" name="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">

            <label>Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección" value="{{ old('direccion') }}">
        </div>

        <input type="submit" value=Guardar>
    </form>
</body>

</html>
