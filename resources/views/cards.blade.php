@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                  <h4>Term</h4>
                </div>
                <div class="card-body">
                  <p>description/definition</p>
                </div>
            </div>
        </div>
    </div>
<br>
<br>

<form>
  <div class="form-group">
    <label for="term">Term</label>
    <input type="text" class="form-control" id="term" aria-describedby="term" placeholder="New term">
  </div>
  <div class="form-group">
    <label for="description">Description/Definition</label>
    <input type="text" class="form-control" id="description" placeholder="New description/definition">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
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
    </table>

</div>
@endsection
