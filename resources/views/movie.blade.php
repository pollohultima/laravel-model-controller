@extends('layouts.app')

@section('movie_css')

    <link rel="stylesheet" href="{{ asset('css/movie.css') }}">



@section('content')

    <h1>Movies List</h1>

    <section class="movie">
        <div class="container">
            <div class="row">


            </div>


        </div>
        @foreach ($movies as $movie)
            <div class="movie_card">
                <h4>{{ $movie->title }}</h4>
                <h6>Original title:{{ $movie->original_title }}</h6>
                <div>
                    <h6>Nationality:</h6>
                    <p>{{ $movie->nationality }}</p>
                </div>
                <div>
                    <h6>Date:</h6>
                    <p>{{ $movie->date }}</p>
                </div>
                <div>
                    <h6>Vote:</h6>
                    <p>{{ $movie->vote }}</p>
                </div>

            </div>
        @endforeach
    </section>

@endsection
