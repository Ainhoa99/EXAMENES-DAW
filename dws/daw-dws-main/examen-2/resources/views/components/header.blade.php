@php
    use Illuminate\Support\Str;
@endphp

<header>
    @php
        $ruta = Route::currentRouteName();
    @endphp

    @if (Str::of($ruta)->startsWith('juego.'))
        <h1><a href="{{ route('index') }}">Txurdinaga Juegos Admin</a></h1>
    @else
        <h1><a href="{{ route('juego.index') }}">Txurdinaga Juegos</a></h1>
    @endif
</header>
