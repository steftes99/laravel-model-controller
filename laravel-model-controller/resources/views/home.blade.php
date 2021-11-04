@extends('layout.main');

@section('title', 'Movies');

@section('contenuto')


    <div class="container">
        @foreach ($movies as $movie)


        <div class="card">
                <h3>Titolo: {{$movie->title}}</h3>
                <h4>Titolo originale:  {{$movie->original_title}}</h4>
                <div>{{$movie->nationality}}</div>
                <div> {{$movie->date}}</div>
                <div> {{$movie->vote}}</div>


        @endforeach
    </div>
    
    
@endsection