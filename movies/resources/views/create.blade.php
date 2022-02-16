@extends('layouts.main')

@section('title', 'Create Movie')

@section('content')
<form method="POST" action="/movies">
    @csrf
     <div class="container">
      <div class="form-group">
        <label for="formGroupExampleInput">enter Name of Movie</label>
        <input name = 'title'type="text" class="form-control" id="formGroupExampleInput" placeholder="RAMBO">
      </div>
      <div class="form-group">
          <label for="formGroupExampleInput">enter Name of Genre</label>
          <input name = 'genre'type="text" class="form-control" id="formGroupExampleInput" placeholder="Action Drama Comedy">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">enter Name of Director</label>
          <input name = 'director'type="text" class="form-control" id="formGroupExampleInput" placeholder="Stieven Spilberg">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">enter Year of Publishing</label>
          <input name = 'year'type="text" class="form-control" id="formGroupExampleInput" placeholder="2017-06-15">
        </div>
        <div class="form-group">
            <label for="storyline">Enter a Storyline content</label>
            <textarea name='storyline' id="storyline" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type='submit' class="btn btn-success mt-3">Submit</button>
    </form>
     </div>
@endsection