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
})->name('welcome');

Route::get('/register','PageController@getRegister')->name('getRegister');
Route::post('/register','PageController@postRegister')->name('dangky');

Route::get('/login','PageController@getLogin')->name('getLogin');
Route::post('/login','PageController@postLogin')->name('login');

Route::get('logout', 'PageController@Logout')->name('dangxuat');