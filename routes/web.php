<?php


<<<<<<< HEAD
use Illuminate\Support\Facades\Route;



Route::get('/', 'PublicController@agefilter');

Route::get('/home', 'PublicController@index');

Route::get('/store', 'PublicController@store');

Route::get('/contact', 'PublicController@contact');


Route::post('/contact', 'PublicController@newContact');


Route::get('/events', 'PublicController@events');

Route::get('/taproom', 'PublicController@taproom');

Route::get('/jobs', 'PublicController@jobs');


Route::post('/tapsignup', 'PublicController@tapSignUp');

Route::post('/eventsignup', 'PublicController@eventSignUp');





Auth::routes();

Route::get('/register', function () {
    return redirect('/login');
});
Route::post('/register', function () {
    return redirect('/login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/home', 'AdminController@index')->name('home');

    Route::post('/generalnewsletter', 'AdminController@generalnewsletter');

    // Taproom routes
    Route::post('/taproom', 'AdminController@storeTap')->name('taproom');

    Route::post('/newtap', 'AdminController@newTap');

    Route::post('/tapnewsletter', 'AdminController@tapnewsletter');

    Route::get('/taproom/create', 'AdminController@createTap');

    Route::get('/taproom/{id}', 'AdminController@showTap');

    Route::get('/taproom/{id}/edit', 'AdminController@editTap');

    Route::delete('/taproom/{id}', 'AdminController@destroyTap')->name('deleteTap');


    // Jobs routes
    Route::get('/jobs/create', 'AdminController@createJob');

    Route::post('/jobs', 'AdminController@storeJob')->name('jobs');

    Route::post('/newjob', 'AdminController@newJob');

    Route::get('/jobs/{id}', 'AdminController@showJob');
=======
>>>>>>> origin/master


<<<<<<< HEAD
    Route::delete('/jobs/{id}', 'AdminController@destroyJob');


    // Event routes

    Route::post('/events', 'AdminController@storeEvent')->name('events');

    Route::post('/eventsnewsletter', 'AdminController@eventsnewsletter');

    Route::get('/events/create', 'AdminController@createEvent');

    Route::post('/newevent', 'AdminController@newEvent');

    Route::get('/events/{id}', 'AdminController@showEvent');

    Route::get('/events/{id}/edit', 'AdminController@editEvent');

    Route::delete('/events/{id}', 'AdminController@destroyEvent');


});






/*
GET /posts

GET /posts/create

POST /posts

GET /posts/{id}/edit

GET /posts/{id}
=======
Route::get('/', 'PublicController@index');
>>>>>>> origin/master

Route::post('/storebusiness', 'PublicController@storeBusiness');


Route::get('/success', 'PublicController@success');


