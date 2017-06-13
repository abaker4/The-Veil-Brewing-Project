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

Route::get('/', 'PublicController@index');

Route::get('/store', 'PublicController@store');

Route::get('/contact', 'PublicController@contact');

Route::post('/contact', 'PublicController@newContact');

Route::get('/events', 'PublicController@events');

Route::get('/taproom', 'PublicController@taproom');

Route::get('/jobs', 'PublicController@jobs');




Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/home', 'AdminController@index')->name('home');

    // Taproom routes
    Route::post('/taproom', 'AdminController@storeTap')->name('taproom');

    Route::post('/newtap', 'AdminController@newTap');

    Route::get('/taproom/create', 'AdminController@createTap');

    Route::get('/taproom/{id}', 'AdminController@showTap');

    Route::get('/taproom/{id}/edit', 'AdminController@editTap');

    Route::delete('/taproom/{id}', 'AdminController@destroyTap');

    // Jobs routes
    Route::get('/jobs/create', 'AdminController@createJob');

    Route::post('/jobs', 'AdminController@storeJob')->name('jobs');

    Route::post('/newjob', 'AdminController@newJob');

    Route::get('/jobs/{id}', 'AdminController@showJob');

    Route::get('/jobs/{id}/edit', 'AdminController@editJob');

    Route::get('/jobs/{id}/delete', 'AdminController@destroyJob');




    // Event routes

    Route::post('/events', 'AdminController@storeEvent')->name('events');

    Route::get('/events/create', 'AdminController@createEvent');

    Route::post('/newevent', 'AdminController@newEvent');

    Route::get('/events/{id}', 'AdminController@showEvent');

    Route::get('/events/{id}/edit', 'AdminController@editEvent');

    Route::get('/events/{id}/delete', 'AdminController@destroyEvent');




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


