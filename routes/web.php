<?php




Route::get('/', 'PublicController@index');

Route::post('/storebusiness', 'PublicController@storeBusiness');


Route::get('/success', 'PublicController@success');


