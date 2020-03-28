<?php
/**
 *   Auth routes module
 */


Auth::routes(['register' => false]);

Route::prefix('email')->name('verification.')->group(function () {
    Route::post('resend', 'Auth\VerificationController@resend')->name('resend');
    Route::get('verify', 'Auth\VerificationController@show')->name('notice');
    Route::get('verify/{id}', 'Auth\VerificationController@verify')->name('verify');
});


Route::delete('login/cookies', 'Auth\LoginController@deleteCookies')->name('login.cookies');

Route::get('register/{referral?}', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register/{referral?}', 'Auth\RegisterController@register');

Route::get('rules', 'RuleController@index')->name('rules');
