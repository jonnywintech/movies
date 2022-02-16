php artisan make:migrateion create_movies_table
php artisan migrate ;

php artisan make:controller MoviesController

php artisan make:model Movie

public function show(Movie $movie,Request $request){
    return view('movie', compact('movie'))
}
skracena verzija za find or fail

php artisan make:request 