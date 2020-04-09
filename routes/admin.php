<?php

Route::prefix('admin')->namespace('admin')->name('admin.')->group(function () {
    Route::get('login', 'DashboardController@login')->name('login');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
//    Route::get('servers', 'ServersController@index')->name('servers');
});

