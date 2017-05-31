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
    return view('public.welcome');
});

Route::get('/store', function () {
    return view('public.store');
});

Route::get('/contact', function () {
    return view('public.contact');
});

Route::get('/events', function(){

   return view('public.events');
});

Route::get('/taproom', 'TaproomController@index');

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/home', 'AdminController@index')->name('home');

    // Taproom routes
    Route::post('/taproom', 'AdminController@storeTap')->name('taproom');

    Route::post('/newtap', 'AdminController@newTap');

    Route::get('/taproom/create', 'AdminController@createTap');

    Route::get('/taproom/{id}', 'AdminController@showTap');

    Route::get('/taproom/{id}/edit', 'AdminController@editTap');

    Route::get('/taproom/{id}/delete', 'AdminController@deleteTap');






    // Event routes
    Route::get('/events', 'AdminController@events')->name('events');


    // Jobs routes
    Route::get('/jobs', 'AdminController@jobs')->name('jobs');

});






/*
GET /posts

GET /posts/create

POST /posts

GET /posts/{id}/edit

GET /posts/{id}

POST /posts/{id}

DELETE /posts/{id}

*/


