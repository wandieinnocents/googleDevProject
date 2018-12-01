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


Route::get('/about','PageController@aboutPage');

// Route::get('/posts','PageController@postsPage');

// Route::get('/contact','PageController@contactPage');

Route::get('/posts/create','PostController@create');

Route::post('/posts','PostController@store');

//viewing all posts
Route::get('/posts/viewposts','PostController@viewposts');

//viewing single post
Route::get('/posts/{post}','PostController@show');

//creation of contact routes

Route::get('/contacts/create','ContactController@create');

Route::post('/contacts','ContactController@store');




