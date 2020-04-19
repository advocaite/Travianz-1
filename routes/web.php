<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/', 'HomeController@index')->name('index');

Route::get('locale/{locale}/{id}', function ($locale, $id){
    Session::put('locale', $locale);
    Session::put('locale_id', $id);
    return redirect()->back();
});

//TODO: transfer
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tutorial', 'HomeController@index')->name('tutorial');
Route::get('/manual', 'HomeController@index')->name('manual');



Route::get('/fields', 'FieldsController@index')->name('fields');
Route::get('/village', 'VillageController@index')->name('village');
Route::get('/overview', 'HomeController@index')->name('overview');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/buildings', 'HomeController@index')->name('building.show');
Route::get('/map', 'MapController@index')->name('map');
Route::get('/statistics', 'StatisticsController@index')->name('statistics');
Route::get('/reports', 'ReportsController@index')->name('reports');
Route::get('/reports', 'ReportsController@index')->name('reports.index');
Route::get('/messages', 'MessagesController@index')->name('messages');
Route::get('/messages', 'MessagesController@index')->name('messages.index');
Route::get('/plus', 'PlusController@index')->name('plus');

Route::prefix('paypal')->name('paypal.')->group(function () {
    Route::post('/ipnNotify', 'PaypalController@postNotify')->name('postNotify');
});
