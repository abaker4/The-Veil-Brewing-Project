<?php


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
    Route::post('/storetap', 'AdminController@storeTap')->name('taproom');

    Route::post('/newtap', 'AdminController@newTap');

    Route::post('/tapnewsletter', 'AdminController@tapnewsletter');

    Route::get('/taproom/create', 'AdminController@createTap');

    Route::get('/taproom/{id}/edit', 'AdminController@editTap');

    Route::delete('/taproom/{id}', 'AdminController@destroyTap')->name('deleteTap');


    // jobs routes
    Route::get('/jobs/create', 'AdminController@createJob');

    Route::post('/storejob', 'AdminController@storeJob')->name('jobs');

    Route::post('/newjob', 'AdminController@newJob');

    Route::get('/jobs/{id}/edit', 'AdminController@editJob');

    Route::delete('/jobs/{id}', 'AdminController@destroyJob');


    // Event routes

    Route::post('/storeevent', 'AdminController@storeEvent')->name('events');

    Route::post('/eventsnewsletter', 'AdminController@eventsnewsletter');

    Route::get('/events/create', 'AdminController@createEvent');

    Route::post('/newevent', 'AdminController@newEvent');

    Route::get('/events/{id}/edit', 'AdminController@editEvent');

    Route::delete('/events/{id}', 'AdminController@destroyEvent');


});



