<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function () {    
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('samples', 'SampleController')->except('create');
});
