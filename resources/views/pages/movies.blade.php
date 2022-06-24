@extends('layout.main')

@section('content')

<main class="container">
    <h1>MOVIES</h1>

    <div class="movies_card_container">

        @foreach ($movies as $movie)
            <div class="movie_card">
                <ul>
                    <li><strong> ID: </strong> {{$movie->id}}</li>
                    <li><strong> Titolo:</strong> {{$movie->title}}</li>
                    <li><strong> Titolo Originale:</strong> {{$movie->original_title}}</li>
                    <li><strong> Nazionalità:</strong> {{$movie->nationality}}</li>
                    <li><strong> Data uscita:</strong> {{$movie->date}}</li>
                    <li><strong> Voto:</strong> {{$movie->vote}}</li>
                </ul>
            </div>
        @endforeach

    </div>
</main>

@endsection
