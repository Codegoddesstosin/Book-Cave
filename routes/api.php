<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




//list All Books
Route::get('books', 'BooksController@index');

Route::get('booksRatings', 'BooksController@view');

// list single book
Route::get('book/{id}', 'BooksController@show');

//create new book
Route::post('book', 'BooksController@store');


// update new book
Route::put('book/{id}', 'BooksController@store');

// delete book
Route::delete('book/{id}', 'BooksController@destroy');


//list All Books
Route::get('reviews', 'ReviewController@index');

// list single book
Route::get('review/{id}', 'ReviewController@show');