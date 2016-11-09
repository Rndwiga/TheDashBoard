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
Route::post('/users/createUser', 'UserController@createUser');
Route::resource('users', 'UserController');
//Route::resource('users', 'UserController', ['only' => ['index', 'show', 'create', 'edit' , 'update']]);
//ticket Routes
Route::get('tickets/userTickets', 'TicketsController@userTickets');
Route::post('tickets/storeTicket', 'TicketsController@storeUserTicket');
Route::resource('tickets', 'TicketsController');

//Inventory

Route::get('inventory/index', 'InventoryController@index');
Route::get('inventory/{id}/show', 'InventoryController@show');
Route::get('inventory/{id}/edit', 'InventoryController@edit');
Route::get('inventory/{id}/destroy', 'InventoryController@destroy');
Route::put('inventory/updateItem/{id}', 'InventoryController@update');

Route::get('inventory/anyData', ['as' => 'inventory.anyData' , 'uses' => 'InventoryController@anyData']);
//Route::get('inventory/anyData',);
