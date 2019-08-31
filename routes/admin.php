<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group.
  for admin users only !
|
*/
Route::resource('podcasts','PodcastsController');

