<<<<<<< HEAD
php artisan make:migration create_movies_table
=======
php artisan make:migrateion create_movies_table
>>>>>>> dd7593ccdf89f17c5c23e109c77909342cecf911
php artisan migrate ;

php artisan make:controller MoviesController

php artisan make:model Movie

public function show(Movie $movie,Request $request){
<<<<<<< HEAD
return view('movie', compact('movie'))
}
skracena verzija za find or fail

php artisan make:request

{{now()->year}}
trenutna godina u php-u

value="{{ old('year') }}"
sacuvava ako input polje ako je korisnik pogresno uneo jedan deo

u routama
Route::get('/oldformdata', 'OldDataController@create');

u kontroleru
public function create()
{
return view('formolddata');
}
=======
    return view('movie', compact('movie'))
}
skracena verzija za find or fail

php artisan make:request 
>>>>>>> dd7593ccdf89f17c5c23e109c77909342cecf911
