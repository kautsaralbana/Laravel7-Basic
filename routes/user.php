<?php

Route::get('user/samples', 'SampleController@index');
Route::resource('user/samples', 'SampleController')->except(['create', 'show']);
