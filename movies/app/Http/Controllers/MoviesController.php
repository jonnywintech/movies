<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StorePostRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies', compact('movies')); // [ 'posts' => $posts]
    }

    public function show($id)
    {
        // $post = Post::where('id', $id)->first();
        $movie = Movie::findOrFail($id);

        return view('movie', compact('movie')); // [ 'post' => $post]
    }
    
}
