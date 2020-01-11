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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return view('all');
});

Route::get('/', function () {
    return view('posts.home');
});

Route::get('/posts', 'PostController@show')->name('posts-show');
Route::get('/posts/create', 'PostController@create')->name('posts-create');
Route::post('/posts/store', 'PostController@store')->name('posts-store');
Route::get('/posts/{id}', 'PostController@single')->name('posts-single');
Route::delete('/posts/{id}', 'PostController@destroy')->name('posts-destroy');
Route::get('/posts/edit/{id}', 'PostController@edit')->name('posts-edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts-update');
