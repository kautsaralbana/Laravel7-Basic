<?php

Route::prefix('admin')->group(function () {
    Route::prefix('samples')->group(function () {
        Route::get('', 'SampleController@index')->name('admin.samples.index');
        Route::post('store', 'SampleController@store')->name('admin.samples.store');
        Route::get('{id}', 'SampleController@edit')->name('admin.samples.edit');
        Route::post('update/{id}', 'SampleController@update')->name('admin.samples.update');
        Route::delete('delete/{id}', 'SampleController@destroy')->name('admin.samples.destroy');
    });
});
