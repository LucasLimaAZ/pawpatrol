<?php

Route::get('/', 'HomeController@index');
Route::get('/store-dog', 'HomeController@storeDog');
Route::get('/store-race', 'HomeController@storeRace');
Route::get('/dogs', 'DogsController@dogs');
Route::get('/races', 'RacesController@races');

Route::post('/store-dog', 'DogsController@store');
Route::post('/store-race', 'RacesController@store');