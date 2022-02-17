@extends('layouts.main')

@section('title', 'Create Movie')

@section('content')

{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
<form method="POST" action="/movies">
    @csrf
     <div class="container col-6">
      <div class="form-group">
        <label for="formGroupExampleInput">enter Name of Movie</label>
        <input name = 'title'type="text" value="{{ old('title') }}" request class="form-control @error('title') alert-danger @enderror" id="formGroupExampleInput" placeholder="RAMBO">
        @error('title')
        <div class="alert alert-danger">
            {{$message}}
        </div>
        @enderror

      </div>
      <div class="form-group">
          <label for="formGroupExampleInput">enter Name of Genre</label>
          <input name = 'genre'type="text" value="{{ old('genre') }}" required class="form-control @error('genre') alert-danger @enderror" id="formGroupExampleInput" placeholder="Action Drama Comedy">
          @error('genre')
          <div class="alert alert-danger">
              {{$message}}
          </div>
          @enderror

        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">enter Name of Director</label>
          <input name = 'director'type="text" value="{{ old('director') }}" class="form-control  @error('director')  alert-danger @enderror" id="formGroupExampleInput" placeholder="Stieven Spilberg">
          @error('director')
          <div class="alert alert-danger">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">enter Year of Publishing</label>
          <input name = 'year' type="number" required min = "1900" max="{{now()->year}}" value="{{ old('year') }}" class="form-control @error('year') alert-danger @enderror" id="formGroupExampleInput" placeholder="2017-06-15">
          @error('year')
          <div class="alert alert-danger">
              {{$message}}
          </div>
          @enderror
        </div>
        <div class="form-group">
            <label for="storyline">Enter a Storyline content</label>
            <textarea name='storyline' id="storyline" cols="30" rows="10" value="{{ old('storyline') }}" class="form-control @error('storyline') alert-danger @enderror"></textarea>
            @error('storyline')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type='submit' class="btn btn-success mt-3">Submit</button>
    </form>
     </div>
@endsection
