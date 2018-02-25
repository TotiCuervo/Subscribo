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

Auth::routes();

Route::get('/homepage', 'HomeController@index')->name('home');

Route::get('/pay', 'PaymentController@index')->name('pay');
Route::post('/payment', 'PaymentController@pay')->name('subscriptionCreate');

Route::post('/cancel', 'PaymentController@cancel')->name('subscriptionCancel');
Route::post('/resume', 'PaymentController@resume')->name('subscriptionResume');
