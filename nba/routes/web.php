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

Route::get('/teams', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show')->name('single-team');

Route::get('/players/{id}', 'PlayersController@show')->name('single-player');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@logout');
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');

Route::post('/teams/{team_id}/comment', 'CommentsController@store')->name('comment-team');

Route::get('/verify/{user_id}', 'VerifyController@store')->name('verify-user');

Route::get('/news', 'NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::get('/news/{id}', 'NewsController@show')->name('single-news');
Route::get('/news/team/{team}', 'NewsController@showTeam')->name('show-team');
Route::post('/news', 'NewsController@store');
