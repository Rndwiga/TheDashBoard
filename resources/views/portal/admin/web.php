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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'admin'], function(){
  Route::resource('admin/users', 'AdminUsersController', [
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

  Route::resource('admin/posts', 'AdminPostController', [
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
  Route::resource('admin/categories', 'AdminCategoriesController', [
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
  Route::resource('admin/media', 'AdminMediasController', [
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
  Route::resource('admin/comments', 'PostCommentsController', [
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
  Route::resource('admin/comment/replies', 'CommentRepliesController', [
    'names'=> [
      'index' => 'admin.comment.replies.index',
      'create' => 'admin.comment.replies.create',
      'store' => 'admin.comment.replies.store',
      'update' => 'admin.comment.replies.update',
      'destroy' => 'admin.comment.replies.destroy',
      'show' => 'admin.comment.replies.show',
      'edit' => 'admin.commentreplies..edit',
    ]
  ]);
});
