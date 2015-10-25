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
Route::get('/', 'DashboardController@index');
Route::get('panel', 'DashboardController@create');
Route::get('/dashboard/lessons', 'LessonsController@index');
Route::get('lessTyp/{id_lessTyp}/less/{id_less}', 'LessonsController@lesson');
Route::get('lessTyp/{id_lessTyp}', 'LessonsController@index');
Route::get('lessTyp/{id_lessTyp}/less/typ/{idTyp}', 'LessonsController@store');




// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




