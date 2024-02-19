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

    <h2>Ver Alumno</h2>

    <label><strong>Nombres y Apellidos:</strong> {{ $alumno->nombre_apellido }}</label><br>
    <label><strong>Edad:</strong> {{ $alumno->edad }}</label><br>
    <label><strong>Teléfono:</strong> {{ $alumno->telefono }}</label><br>
    <label><strong>Dirección:</strong> {{ $alumno->direccion }}</label><br>
</body>

</html>
