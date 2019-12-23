<?php

Route::get("/", "HomeController@index");

Route::get("/store-dog", "HomeController@storeDog");
Route::get("/store-race", "HomeController@storeRace");

Route::get("/dogs", "DogsController@dogs");
Route::get("/dogs/{dog}", "DogsController@show");
Route::get("/races", "RacesController@races");

Route::post("/store-dog", "DogsController@store");
Route::post("/store-race", "RacesController@store");

Route::get("/delete-dog/{dog}", "DogsController@destroy");
Route::get("/delete-race/{race}", "RacesController@destroy");

Route::get("/edit-dog/{dog}", "DogsController@edit");
Route::get("/edit-race/{race}", "RacesController@edit");

Route::post("/update-dog", "DogsController@update");
Route::post("/update-race", "RacesController@update");