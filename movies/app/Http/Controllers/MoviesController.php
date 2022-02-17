<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use Illuminate\Support\Facades\DB;
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


    public function create(Request $request)
    {
        return view('create');
    }

    public function store(StoreMovieRequest $request)
    {
        DB::listen(function ($query) {
            info($query->sql);
        });


        $data = $request->validated();
        info($request->all());
        $post = Movie::create($data);
        info($data);
        $movie = Movie::create($data);

        // return view('post', compact('post'));
        return redirect("/movies/$movie->id");
    }



}
