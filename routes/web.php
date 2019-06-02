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

Route::get('/books', function () {
    return view('books.index');
});



Route::get('/booksRatings', function () {
    return view('books.view');
});



Route::resource('books', 'BooksController');


Route::get('booksRatings', 'BooksController@view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{name}', 'ProfileController@profile');
Route::resource('review', 'ReviewController');



