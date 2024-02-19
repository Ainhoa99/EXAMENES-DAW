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
    <a href="{{ route('alumnos.create') }}"> Nuevo Alumno</a>

    <h2>Listado de Alumnos</h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
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
                    <td>{{ $alumno->nombre_apellido }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->direccion }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn-info">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn-primary">Editar</a>
                        <a href="{{ route('alumnos.confirm', $alumno->id) }}" class="btn-danger">Eliminar</a>

                        {{-- sin confirmación --}}
                        {{-- <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                            <a href="{{ route('alumnos.show', $alumno->id) }}">Ver</a>
                            <a href="{{ route('alumnos.edit', $alumno->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Borrar">
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $alumnos->links() }}
</body>

</html>
