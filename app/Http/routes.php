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
Route::resource('users', 'UsersController', [
    'only' => ['show', 'edit', 'update'],
]);
Route::get('/users/{id}/articles', 'UsersController@articles')->name('users.articles');
Route::get('/users/{id}/comments', 'UsersController@comments')->name('users.comments');
Route::get('/users/{id}/categories', 'UsersController@categories')->name('users.categories');
Route::get('/users/{id}/favorites', 'UsersController@favorites')->name('users.favorites');

/**
 * Categories
 */
Route::resource('categories', 'CategoriesController', [
    'except' => ['index'],
]);


/**
 * Articles
 */
Route::resource('articles', 'ArticlesController');
Route::post('/article/{id}/upfavorite', 'ArticlesController@upFavorite')->name('articles.upfavorite');
Route::post('/article/{id}/downfavorite', 'ArticlesController@downFavorite')->name('articles.downfavorite');
Route::post('/article/{id}/comment', 'ArticlesController@comment')->name('articles.comment');

/**
 * Upload
 */
Route::group([
    'as' => 'upload.',
    'middleware' => 'auth',
    'prefix' => 'upload',
], function() {
    Route::post('/image', 'UploadController@image')->name('image');
});


Route::get('/notifications', 'NotificationsController@index')->name('notifications.index')->middleware('auth');

Route::get('/logs', 'LogsController@index');