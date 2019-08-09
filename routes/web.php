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
Route::get('/','PageController@top');
Route::get('/headline','PageController@headline');
Route::group(['middleware' => 'auth'], function () {
    // 認証処理後に表示させたいページ
    Route::get('/game','PageController@getGame');
    Route::post('/game','PageController@postGame');
    Route::delete('/game','PageController@deleteGame');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
