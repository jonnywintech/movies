<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\StoreMovieRequest;
=======
use App\Http\Requests\StorePostRequest;
>>>>>>> dd7593ccdf89f17c5c23e109c77909342cecf911
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Comments;
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
        $comments = Comments::all();


        return view('movie', compact('movie','comments')); // [ 'post' => $post]
    }


    public function create(Request $request)
    {
        return view('create');
    }

<<<<<<< HEAD
    public function store(StoreMovieRequest $request)
=======
    public function store(StorePostRequest $request)
>>>>>>> dd7593ccdf89f17c5c23e109c77909342cecf911
    {
        DB::listen(function ($query) {
            info($query->sql);
        });

<<<<<<< HEAD

        $data = $request->validated();
        info($request->all());
        $post = Movie::create($data);
=======
      
        $data = $request->validated();
        info($request->all());
        $post =Post::create($data);
>>>>>>> dd7593ccdf89f17c5c23e109c77909342cecf911
        info($data);
        $movie = Movie::create($data);

        // return view('post', compact('post'));
        return redirect("/movies/$movie->id");
    }

<<<<<<< HEAD



=======
    
    
>>>>>>> dd7593ccdf89f17c5c23e109c77909342cecf911
}
