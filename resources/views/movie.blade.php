@extends('layouts.app')

@section('movie_css')

    <link rel="stylesheet" href="{{ asset('css/movie.css') }}">



@section('content')

    <h1>Movies List</h1>

    <section class="movie">
        <div class="container">





            @foreach ($movies as $movie)
                <div class="movie_card">
                    <h3>{{ $movie->title }}</h3>
                    <div>
                        <h4>Original title:</h4>
                        <p>
                            {{ $movie->original_title }}
                        </p>
                    </div>

                    <div>
                        <h4>Nationality:</h4>
                        <p>{{ $movie->nationality }}</p>
                    </div>
                    <div>
                        <h4>Date:</h4>
                        <p>{{ $movie->date }}</p>
                    </div>
                    <div>
                        <h4>Vote:</h4>
                        <p>{{ $movie->vote }}</p>
                    </div>

                </div>
            @endforeach
        </div>
    </section>

@endsection
