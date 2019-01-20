<?php

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
    return view('welcome');
});

Route::get('countries', 'CountryController@index')->name('countries');
Route::get('voting/{country}', 'VoteController@index')->name('voting');
Route::get('results', 'VoteController@results')->name('results');
Route::post('voting/{country}', 'VoteController@store')->name('voting.post');
