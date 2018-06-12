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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', [
	'uses'=>'\App\Http\Controllers\StaffController@search',
	'as'=>'search',
	'middleware' => ['auth'],
	]);

Route::post('/add-new', [
	'uses'=>'\App\Http\Controllers\StaffController@addNew',
	'as'=>'addnew',
	'middleware' => ['auth'],
	]);

Route::get('/{id}/edit', [
	'uses'=>'\App\Http\Controllers\StaffController@getEdit',
	'as'=>'getedit',
	'middleware' => ['auth'],
	]);

Route::post('/{id}/edit', [
	'uses'=>'\App\Http\Controllers\StaffController@postEdit',
	'as'=>'postedit',
	'middleware' => ['auth'],
	]);

Route::get('/{id}/delete', [
	'uses'=>'\App\Http\Controllers\StaffController@delete',
	'as'=>'delete',
	'middleware' => ['auth'],
	]);