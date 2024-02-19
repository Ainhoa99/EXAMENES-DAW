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

    <h2>Editar Alumno</h2>

    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf

        {{ method_field('PUT') }}

        <div class="row">
            <label>Nombres y Apellidos:</label>
            <input type="text" name="nombre_apellido" placeholder="Nombres y Apellidos"
                value="{{ $alumno->nombre_apellido }}">

            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Edad" value="{{ $alumno->edad }}">

            <label>Teléfono:</label>
            <input type="text" name="telefono" placeholder="Teléfono" value="{{ $alumno->telefono }}">

            <label>Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección" value="{{ $alumno->direccion }}">
        </div>

        <input type="submit" value="Guardar">

    </form>
</body>

</html>
