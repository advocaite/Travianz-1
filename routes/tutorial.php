<?php

Route::prefix('manual')->name('manual.')->group(function () {
    Route::get('', 'ManualController@tribes')->name('tribes');
    Route::get('buildings', 'ManualController@buildings')->name('buildings');
    Route::get('FAQ', 'ManualController@faq')->name('FAQ');
    Route::get('village', 'ManualController@village')->name('village');
});

Route::prefix('tutorial')->name('tutorial.')->group(function () {
    Route::get('', 'TutorialController@village')->name('village');
    Route::get('resources', 'TutorialController@resources')->name('resources');
    Route::get('buildings', 'TutorialController@buildings')->name('buildings');
    Route::get('neighbours', 'TutorialController@neighbours')->name('neighbours');
    Route::get('navigation', 'TutorialController@navigation')->name('navigation');
});
