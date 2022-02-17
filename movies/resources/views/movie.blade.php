@extends('layouts.main')
@section('title', 'Movies')

@section('content')

<div class="container col-6">
    <h1>{{$movie->title}}</h1>
<ul class="list-group"></ul>

        <li class="list-group-item">{{$movie->genre}}</li>
        <li class="list-group-item">{{$movie->director}}</li>
        <li class="list-group-item">{{$movie->year}}</li>
</ul>
<p class="text-justify">{{$movie->storyline}}</p>
<h5 class="my-3">Comments</h5>
<p class="text">
    <ul class="list-group">
        @foreach ($comments as $comment )

        <li class="list-item-group">
            @if ($comment->movie_id == $movie->id)
            {{$comment->content}}
            @endif
        </li>
        {{-- <li class="list-item-group">{{$comment}}</li> --}}
        @endforeach
    </ul>
</p>
</div>
@endsection
