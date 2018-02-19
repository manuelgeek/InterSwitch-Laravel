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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','InterSwitchController@index');
Route::get('/process/{id}','InterSwitchController@process')->name('process');
Route::any('/process/redirect/{id}','InterSwitchController@redirect')->name('process.redirect');