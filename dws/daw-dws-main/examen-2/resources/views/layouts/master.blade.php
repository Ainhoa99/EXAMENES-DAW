<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>examen 2</title>

    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <x-header></x-header>

    @yield('content')

    <x-footer></x-footer>
</body>

</html>
