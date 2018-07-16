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

Route::middleware(['auth'])->group(function () {
    Route::view('/add-post', 'post.add-post');
    Route::get('/posts', 'PostController@posts');
    Route::get('/post/{post}', 'PostController@post');
    Route::post('/add-post', 'PostController@create')->name('add.post');
    Route::post('/add-comments', 'PostController@createComment')->name('add.comment');
});