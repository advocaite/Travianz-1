<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('index');;

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
