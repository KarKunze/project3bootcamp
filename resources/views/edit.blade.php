@extends('layouts.app')


@section('content')
<div class="container">

  <form method="post" action="/cards/{{ $flashcard->id }}">
  		@csrf
  		@method('PATCH')

  <div class="form-group">
    <label for="term">Edit Your Term</label>
    <input type="text" class="form-control" name="flashcardTerm" id="term" value="{{ $flashcard->term }}">
  </div>
  <div class="form-group">
    <label for="description">Edit Your Description/Definition</label>
    <input type="text" class="form-control" id="description" name="flashcardDescription" value="{{ $flashcard->description }}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
