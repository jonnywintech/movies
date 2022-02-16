<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        DB::listen(function ($query) {
            info($query->sql);
        });

        // $post = new Post();
        // $post->title = $request->get('title', '');
        // $post->body = $request->get('body', '');
        // $post->is_published = $request->get('is_published', false);
        // $post->save();

        // $data = [
        //     'title' => $request->get('title', ''),
        //     'body' => $request->get('body', ''),
        //     'is_published' => $request->get('is_published', false),
        // ];
        info($request->all());
        $data = $request->only(['title', 'genre', 'director','year','storyline']);
        info($data);
        $movie = Movie::create($data);

        // return view('post', compact('post'));
        return redirect("/movies/$movie->id");
    }
    
}
