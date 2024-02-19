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
    <div class="container py-5">
        <h1>¿Deseas eliminar el registro de {{ $alumno->nombre_apellido }} ? </h1>

        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <input class="btn btn-danger" type="submit" value="Eliminar definitiva">

            <a class="btn btn-primary" href="{{ route('cancel') }}">Cancelar</a>
        </form>
    </div>
</body>

</html>
