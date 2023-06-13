@extends('caneva')
@section('content')
    <h2 class="title-content">Les meilleures séries mangas</h2>
    @foreach ($series as $serie)
        <div class="serie-container">
            <img class="serie-image" src="img/{{ $serie->couverture }}" alt="Couverture de {{ $serie->titre }}">
            <div class="serie-details">
                <h2 class="serie-title">{{ $serie->titre }}</h2>
                <p class="serie-info"><span>Auteur :</span> {{ $serie->auteur }}</p>
                <p class="serie-info"><span>Nombre de volumes :</span> {{ $serie->nombre_volumes }}</p>
                <p class="serie-info"><span>Date de création :</span> {{ $serie->date_premiere_parution }}</p>
                <p class="serie-info">Série {{ $serie->serie_finie ? 'terminée' : 'en cours' }}</p>
            </div>
        </div>
    @endforeach
@endsection
