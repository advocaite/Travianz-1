<?php

Route::prefix('installation')->namespace('installation')->name('installation.')->group(function () {
	Route::get('', 'InstallationController@greetings')->name('greetings');
	Route::get('finish', 'InstallationController@finish')->name('finish');
	Route::resource('config', 'ConfigController')->only(['index', 'store']);
	Route::resource('database', 'DatabaseController')->only(['index', 'store']);
	Route::resource('accounts', 'AccountController')->only(['index', 'store']);
});
