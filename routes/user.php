<?php

// Data Sample
Route::prefix('user')->group(function () {
    Route::prefix('samples')->group(function () {
        Route::get('', 'SampleController@index')->name('user.samples.index');
        Route::post('store', 'SampleController@store')->name('user.samples.store');
        Route::get('{id}', 'SampleController@edit')->name('user.samples.edit');
        Route::post('update/{id}', 'SampleController@update')->name('user.samples.update');
        Route::delete('delete/{id}', 'SampleController@destroy')->name('user.samples.destroy');
    });
});
