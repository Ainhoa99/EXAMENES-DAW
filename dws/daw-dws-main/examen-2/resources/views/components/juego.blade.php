<article class="card-juego">
    <h3>{{ $juego->titulo }}</h3>
    <p>Juego de {{ $juego->nombre_categoria }}</p>
    <p>{{ $juego->synopsis }}</p>

    <img src="{{ asset('img/' . $juego->poster) }}">

    {{ $slot }}
</article>
