<?php

Route::prefix('installation')->name('installation.')->group(function () {
	Route::get('', 'Installation\InstallationController@greetings')->name('greetings');
	Route::get('finish', 'Installation\InstallationController@finish')->name('finish');
	Route::resource('config', 'Installation\ConfigController')->only(['index', 'store']);
	Route::resource('database', 'Installation\DatabaseController')->only(['index', 'store']);
	Route::resource('accounts', 'Installation\AccountController')->only(['index', 'store']);
});
