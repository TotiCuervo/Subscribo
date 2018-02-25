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

Route::get('/Subscribo', 'HomeController@index')->name('subscribo');
Auth::routes();

Route::get('/homepage', 'HomeController@index')->name('home');

Route::get('/pay', 'PaymentController@index')->name('pay');
Route::post('/payment', 'PaymentController@pay')->name('subscriptionCreate');
