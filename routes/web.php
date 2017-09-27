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
    return view('welcome');
});

Auth::routes();


Route::get('/login/google',['uses'=>'GoogleController@redirectToProvider','as'=>'google.login']);
Route::get('/login/google/callback', 'GoogleController@handleProviderCallback');
Route::get('/logout', 'GoogleController@logOut'); // Finalizar sesión

Route::group(['before' => 'auth'], function() {   	
	Route::get('/comments', 'GoogleController@index');
});	