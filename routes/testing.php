<?php

Route::prefix('test')->name('test.')->group(function () {
    Route::get('/', 'HomeController@test')->name('index');
    Route::get('/fields', 'FieldController@test')->name('index');
});
