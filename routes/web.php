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
    return view('index');
});

Auth::routes();

Route::resource('podcast','PodcastsController');

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::resource('podcasts','PodcastsController');
});