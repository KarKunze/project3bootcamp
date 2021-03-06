<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/cards', 'FlashcardsController');

Route::resource('/flashcards', 'FlashcardController');

Route::get('/flashcards', function() {
	$groups = \App\Flashcard::orderBy('term')->get();
	return view('flashcards.index', compact('flashcards'));
});

Route::get('/edit', function () {
    return view('edit');
});
