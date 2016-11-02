<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Landing page
Route::get('/', function () {
    return view('welcome');
});
//Authorization and registration
Auth::routes();

//Home Controller
Route::get('/home', 'HomeController@index');
//user Routes
Route::resource('users', 'UserController', ['only' => ['index', 'show', 'create', 'edit']]);
