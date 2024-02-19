<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Aula Online</title>

    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body class="container">
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('alumnos.index') }}">Alumnos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('profesores.index') }}">Profesores</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('cursos.index') }}">Cursos</a>
            </li>
        </ul>
    </nav>

    @yield('content')
</body>

</html>
