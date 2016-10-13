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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', 'HomeController@demo')->name('demo');

Route::auth();


/**
 * articles
 */

Route::get('/articles', [
    'uses' => 'ArticlesController@index',
    'name' => 'articles.index',
]);
