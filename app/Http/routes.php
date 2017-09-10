<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PayPalTest@index');
Route::get('/checkout', 'PayPalTest@getCheckout');
Route::get('/done', 'PayPalTest@getDone');
Route::get('/cancel', 'PayPalTest@getCancel');
