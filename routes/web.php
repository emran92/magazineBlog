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



Route::namespace('User')->group(function () {
    Route::get('/', 'UserHomeController@index')->name('user.home');
    Route::get('post/{post}', 'UserPostController@post')->name('user.post');
    Route::get('post/tag/{tag}', 'UserHomeController@tag')->name('user.tag');
    Route::get('post/category/{category}', 'UserHomeController@category')->name('user.category');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/index', 'IndexController@user')->name('index');

Route::get('admin/posts','PostController@posts')->name('posts');
Route::get('/admin/posts/view/{id}','PostController@view')->name('posts.view');
Route::get('admin/posts/create','PostController@create')->name('posts.create');
Route::post('admin/posts/store','PostController@store')->name('posts.store');
Route::match(['get', 'post'], '/admin/posts/edit/{id}','PostController@edit')->name('posts.edit');
Route::get('/admin/posts/delete-posts-image/{id}','PostController@deletePostImage');
Route::match(['get', 'post'], '/admin/posts/delete-posts/{id}','PostController@deletePost');

Route::get('admin/categories','CategoryController@categories')->name('categories');
Route::get('admin/categories/create','CategoryController@create')->name('categories.create');
Route::post('admin/categories/store','CategoryController@store')->name('categories.store');
Route::match(['get', 'post'], '/admin/categories/edit/{id}','CategoryController@edit')->name('categories.edit');
Route::match(['get', 'post'], '/admin/categories/delete-categories/{id}','CategoryController@deleteCategory');

Route::get('admin/tags','TagsController@tags')->name('tags');
Route::get('admin/tags/create','TagsController@create')->name('tags.create');
Route::post('admin/tags/store','TagsController@store')->name('tags.store');
Route::match(['get', 'post'], '/admin/tags/edit/{id}','TagsController@edit')->name('tags.edit');
Route::match(['get', 'post'], '/admin/tags/delete-tags/{id}','TagsController@deleteTag');
