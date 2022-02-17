@extends('layouts.main')
@section('title', 'Movies')

@section('content')

<div class="container">
    <h1>List of Movies</h1>
<ul class="list-group"></ul>
@foreach ($movies as $movie)
    <a href="/movies/{{$movie->id}}">
        <li class="list-group-item">{{$movie->title}}</li>
    </a>
    @endforeach
</ul>
</div>
@endsection