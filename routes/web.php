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
Route::get('/', 'frontendController@index');
Route::resource('blog', 'frontendController');
Route::get('/about', function () {
    return view('frontend/v2/includes/about'); //about
});
Route::get('/blog', 'frontendController@showBlog'); //blog
Route::get('/services', function () {
   return view('frontend/v2/includes/services'); //serv
});
Route::get('/contact', function () {
   return view('frontend/v2/includes/contact'); //contact
});
Route::get('/elements', function () {
    return view('frontend/v2/includes/elements'); //elements
});

//Authorization and registration
Auth::routes();
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');
Route::group(['middleware' => 'auth'], function(){
  //Home Controller
  Route::get('/home', 'HomeController@index');
  //ticket Routes
  Route::get('tickets/userTickets', 'TicketsController@userTickets');
  Route::post('tickets/storeTicket', 'TicketsController@storeUserTicket');
  Route::resource('tickets', 'TicketsController');
  //Contacts
  Route::resource('phonebook', 'ContactDetailsController');
  //Contacts
  Route::resource('Emails', 'EmailController');
  //Posts
  Route::get('Posts/userPosts', 'PostController@userPosts');
  Route::get('Posts/userDrafts', 'PostController@userDrafts');
  Route::post('Posts/uploadImage', 'PostController@uploadImage');
  Route::resource('Posts', 'PostController');
  //user Routes
  Route::post('/users/createUser', 'UserController@createUser');
  Route::resource('users', 'UserController');
  //Inventory
  Route::resource('inventory', 'InventoryController');
});
