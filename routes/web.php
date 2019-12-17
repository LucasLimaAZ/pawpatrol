<?php

Route::get('/', 'HomeController@index');
Route::get('/store-dog', 'HomeController@storeDog');
Route::get('/dogs', 'DogsController@dogs');

Route::post('/store-dog', 'DogsController@store');