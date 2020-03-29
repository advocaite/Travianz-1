<?php

Route::prefix('admin')->namespace('admin')->name('admin.')->group(function () {
    Route::get('', 'DashboardController@index')->name('dashboard');
    Route::get('servers', 'ServersController@index')->name('servers');
});

