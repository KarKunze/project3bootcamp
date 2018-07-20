@extends('layouts.app')



<div class="container">

<form method="post" action="/cards">
  @csrf

  <div class="form-group">
    <label for="term">Edit Your Term</label>
    <input type="text" class="form-control" name="flashcardTerm" id="term" placeholder="New term">
  </div>
  <div class="form-group">
    <label for="description">Edit Your Description/Definition</label>
    <input type="text" class="form-control" id="description" name="flashcardDescription" placeholder="New description/definition">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
