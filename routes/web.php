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

Route::get('/detail/{id}', 'MProductController@show')->name('detail');
Route::post('/addCart', 'CartController@addCart')->name('addCart');
Route::get('/cart/list','CartController@CartList')->name('cart.list');