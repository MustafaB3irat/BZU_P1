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
    return view('layouts.layout');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/usrview', 'UsersView@show')->middleware('auth');

Route::resource('courses', 'coursesController')->middleware('auth');

Route::get('/table', 'userController@show')->middleware('auth')->name('table');

Route::get('/show', 'userController@index')->middleware('auth')->name('UserIndex');

// Facebook Login
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');