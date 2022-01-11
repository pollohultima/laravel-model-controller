@extends('layouts.app')

@section('content')

    <h1>Movies List</h1>

    <section class="movie">
        @foreach ($movies as $movie)
            <div class="movie_card">

            </div>
        @endforeach
    </section>

@endsection
