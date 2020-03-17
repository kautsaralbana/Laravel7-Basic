<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "user" middleware group. Now create something great!
|
*/

// Data Sample
Route::prefix('user')->name('user.')->group(function () {
    Route::resource('samples', 'SampleController')->except('create');
});
