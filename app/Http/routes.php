<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ArticlesController@index');

Route::get('/home', 'HomeController@index');

Route::auth();


/**
 * User
 */
Route::get('/user/{id}', 'UsersController@show')->name('users.show');
Route::get('/user/{id}/edit', 'UsersController@edit')->name('users.edit');
Route::patch('/user/{id}', 'UsersController@update')->name('users.update');
Route::get('/user/{id}/articles', 'UsersController@articles')->name('users.articles');
Route::get('/user/{id}/comments', 'UsersController@comments')->name('users.comments');
Route::get('/user/{id}/categories', 'UsersController@categories')->name('users.categories');
Route::get('/user/{id}/favorites', 'UsersController@favorites')->name('users.favorites');


/**
 * Categories
 */
Route::get('/categories', 'CategoriesController@index')->name('categories.index');
Route::get('/category/create', 'CategoriesController@create')->name('categories.create');
Route::post('/category', 'CategoriesController@store')->name('categories.store');
Route::get('/category/{id}', 'CategoriesController@show')->name('categories.show');
Route::get('/category/{id}/edit', 'CategoriesController@edit')->name('categories.edit');
Route::patch('/category/{id}', 'CategoriesController@update')->name('categories.update');
Route::delete('/category/{id}', 'CategoriesController@destroy')->name('categories.delete');


/**
 * Articles
 */
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/article/create', 'ArticlesController@create')->name('articles.create');
Route::post('/article', 'ArticlesController@store')->name('articles.store');
Route::get('/article/{id}', 'ArticlesController@show')->name('articles.show');
Route::get('/article/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::patch('/article/{id}', 'ArticlesController@update')->name('articles.update');
Route::delete('/article/{id}', 'ArticlesController@destroy')->name('articles.delete');
Route::post('/article/{id}/upfavorite', 'ArticlesController@upFavorite')->name('articles.upfavorite');
Route::post('/article/{id}/downfavorite', 'ArticlesController@downFavorite')->name('articles.downfavorite');
Route::post('/article/{id}/comment', 'ArticlesController@comment')->name('articles.comment');


Route::post('/upload/image', 'UploadController@image')->name('upload.image');

