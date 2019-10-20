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
    return view('partials.index');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/index', 'IndexController@user')->name('index');

Route::get('/posts','PostController@posts')->name('posts');
Route::get('/posts/create','PostController@create')->name('posts.create');
Route::post('/posts/store','PostController@store')->name('posts.store');
Route::match(['get', 'post'], '/posts/edit/{id}','PostController@edit')->name('posts.edit');
Route::get('/posts/delete-posts-image/{id}','PostController@deletePostImage');
Route::match(['get', 'post'], '/posts/delete-posts/{id}','PostController@deletePost');

Route::get('/categories','CategoryController@categories')->name('categories');
Route::get('/categories/create','CategoryController@create')->name('categories.create');
Route::post('/categories/store','CategoryController@store')->name('categories.store');
Route::match(['get', 'post'], '/categories/edit/{id}','CategoryController@edit')->name('categories.edit');
Route::match(['get', 'post'], '/categories/delete-categories/{id}','CategoryController@deleteCategory');

Route::get('/tags','TagsController@tags')->name('tags');
Route::get('/tags/create','TagsController@create')->name('tags.create');
Route::post('/tags/store','TagsController@store')->name('tags.store');
Route::match(['get', 'post'], '/tags/edit/{id}','TagsController@edit')->name('tags.edit');
Route::match(['get', 'post'], '/tags/delete-tags/{id}','TagsController@deleteTag');
