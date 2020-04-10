<?php


Route::prefix('admin')->namespace('admin')->name('admin.')->group(function () {
    Route::get('', 'DashboardController@index')->name('login');
    Route::get('login', 'DashboardController@login')->name('login');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('users', 'UserController@index')->name('users');
    Route::get('mods', 'ModsController@index')->name('mods.index');
    Route::get('users', 'UsersController@index')->name('users.index');
//    Route::get('servers', 'ServersController@index')->name('servers');
});

