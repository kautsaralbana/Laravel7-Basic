<?php

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('admin.dashboard');
});
