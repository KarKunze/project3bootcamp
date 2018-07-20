@extends('layouts.app')

@section('make')


<div class="container">

<form method="post" action="/cards">
  @csrf

  <div class="form-group">
    <label for="term">Term</label>
    <input type="text" class="form-control" name="flashcardTerm" id="term" placeholder="New term">
  </div>
  <div class="form-group">
    <label for="description">Description/Definition</label>
    <input type="text" class="form-control" id="description" name="flashcardDescription" placeholder="New description/definition">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<br>
@endsection



@section('flash')
<flashcard-component :flashcards-data='{{ $flashcards->toJson() }}'></flashcard-component>
@endsection




@section('content')
<br>
<br>
<div class="row">
  @foreach ($flashcards as $flashcard)
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
              <a class="nav-link term" href="#">{{ $flashcard->term }}</a>
              <button type="button" class="btn-sm btn-primary" data-toggle="collapse" data-target="#div{{ $flashcard->id }}">Show definition</button>
              <!-- <h4>{{ $flashcard->term }}</h4> -->
            </div>
            <div class="card-body description collapse" id="div{{ $flashcard->id }}">
              <p>{{ $flashcard->description }}</p>
              <div class="row justify-content-between">
                <div class="col-auto">
              <a href="/cards/{{ $flashcard->id }}/edit" class="btn btn-secondary btn-sm">edit</a>
            </div>
            <div class="col-auto">
              <form action="/cards/{{ $flashcard->id }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-secondary btn-sm" type="submit">delete</button>
              </form>
            </div>
            </div>

            </div>
        </div>
    </div>
      @endforeach
</div>


<!-- <br>
<br>
    <table class="table">
      <thead>
        <tr>
          <th>Term</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
@foreach ($flashcards as $flashcard)
          <tr>
            <td>{{ $flashcard->term }}</td>
            <td>{{ $flashcard->description }}</td>
            <td>
          </tr>
@endforeach
        </tbody>
    </table> -->

</div>


@endsection
