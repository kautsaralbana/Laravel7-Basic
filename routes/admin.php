<?php

Route::get('samples', 'SampleController@index');
Route::resource('admin/samples', 'SampleController')->except(['create', 'show']);
