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

Route::get('/', 'PagesController@home');

Route::get('login', 'PagesController@login');

Route::get('newreleases', 'PagesController@newreleases');

Route::get('songs', 'PagesController@songs');

Route::get('singers', 'PagesController@singers');

Route::get('categories/{name}', 'PagesController@category');

Route::get('about', 'PagesController@about');

Route::get('albums', 'PagesController@albums');

Route::get('singers/{name}', 'PagesController@singer');

Route::get('songs/{name}', 'PagesController@song');

Route::get('albums/{albumname}', 'PagesController@album');

Route::get('categories', 'PagesController@categories');

Route::post('albums/{name}', 'CommentsController@store');







//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
