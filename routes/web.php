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
Route::get('/', 'frontendController@index')->name('home');
Route::get('/about', function () {return view('frontend/v2/includes/about');})->name('about');//about
Route::get('/services', function () {return view('frontend/v2/includes/services');})->name('services'); //services
Route::get('/contact', function () {return view('frontend/v2/includes/contact');})->name('tyondo.contactUs'); //contact
Route::get('/elements', function () {return view('frontend/v2/includes/elements');}); //elements
Route::get('/posts', 'frontendController@showBlog')->name('posts'); //blog
Route::get('/post/{slug}', 'frontendController@show')->name('blog.post.show'); // single blog
Route::resource('ContactUs', 'frontendController');


//Authorization and registration
Auth::routes();
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');
Route::group(['middleware' => 'auth'], function(){
  //Home Controller
  Route::get('/home', 'HomeController@index');
  //Posts
  Route::get('Posts/userPosts', 'PostController@userPosts');
  Route::get('Posts/userDrafts', 'PostController@userDrafts');
  Route::post('Posts/uploadImage', 'PostController@uploadImage');
  Route::resource('Posts', 'PostController');
  //user Routes
  Route::post('/users/createUser', 'UserController@createUser');
  Route::resource('users', 'UserController');
});

Route::group(['middleware' => 'auth'], function(){
  Route::resource('admin/users', 'Admin\AdminUsersController', [
    'names'=> [
      'index' => 'admin.users.index',
      'create' => 'admin.users.create',
      'store' => 'admin.users.store',
      'update' => 'admin.users.update',
      'destroy' => 'admin.users.destroy',
      'show' => 'admin.users.show',
      'edit' => 'admin.users.edit',
    ]
  ]);
  Route::get('admin/posts/manage', 'Admin\AdminPostController@managePosts')->name('admin.posts.manage');
  Route::resource('admin/posts', 'Admin\AdminPostController', [
    'names'=> [
      'index' => 'admin.posts.index',
      'create' => 'admin.posts.create',
      'store' => 'admin.posts.store',
      'update' => 'admin.posts.update',
      'destroy' => 'admin.posts.destroy',
      'show' => 'admin.posts.show',
      'edit' => 'admin.posts.edit',
    ]
  ]);
  Route::resource('admin/categories', 'Admin\AdminCategoriesController', [
    'names'=> [
      'index' => 'admin.categories.index',
      'create' => 'admin.categories.create',
      'store' => 'admin.categories.store',
      'update' => 'admin.categories.update',
      'destroy' => 'admin.categories.destroy',
      'show' => 'admin.categories.show',
      'edit' => 'admin.categories.edit',
    ]
  ]);
  Route::resource('admin/roles', 'Admin\AdminUserRolesController', [
    'names'=> [
      'index' => 'admin.roles.index',
      'create' => 'admin.roles.create',
      'store' => 'admin.roles.store',
      'update' => 'admin.roles.update',
      'destroy' => 'admin.roles.destroy',
      'show' => 'admin.roles.show',
      'edit' => 'admin.roles.edit',
    ]
  ]);
  Route::resource('admin/media', 'Admin\AdminMediasController', [
    'names'=> [
      'index' => 'admin.media.index',
      'create' => 'admin.media.create',
      'store' => 'admin.media.store',
      'update' => 'admin.media.update',
      'destroy' => 'admin.media.destroy',
      'show' => 'admin.media.show',
      'edit' => 'admin.media.edit',
    ]
  ]);
  /*
  Route::resource('admin/comments', 'Admin\PostCommentsController', [
    'names'=> [
      'index' => 'admin.comments.index',
      'create' => 'admin.comments.create',
      'store' => 'admin.comments.store',
      'update' => 'admin.comments.update',
      'destroy' => 'admin.comments.destroy',
      'show' => 'admin.comments.show',
      'edit' => 'admin.comments.edit',
    ]
  ]);
  Route::resource('admin/comment/replies', 'Admin\CommentRepliesController', [
    'names'=> [
      'index' => 'admin.comment.replies.index',
      'create' => 'admin.comment.replies.create',
      'store' => 'admin.comment.replies.store',
      'update' => 'admin.comment.replies.update',
      'destroy' => 'admin.comment.replies.destroy',
      'show' => 'admin.comment.replies.show',
      'edit' => 'admin.commentreplies.edit',
    ]
  ]);
  */
});
