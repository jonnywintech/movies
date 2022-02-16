@extends('layouts.main')
@section('title', 'Movies')

@section('content')

<div class="container">
    <h1>{{$movie->title}}</h1>
<ul class="list-group"></ul>

        <li class="list-group-item">{{$movie->genre}}</li>
        <li class="list-group-item">{{$movie->director}}</li>
        <li class="list-group-item">{{$movie->year}}</li>
</ul>
<p class="text-justify">{{$movie->storyline}}</p>
</div>
@endsection