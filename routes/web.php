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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/category/{id}', 'HomeController@list')->name('category.product');

Route::get('/productDetail/{id}', 'HomeController@detail')->name('product.detail');

Route::get('/addToCart/{id}', 'CartController@addToCart')->name('addToCart');

Route::get('/showCart', 'CartController@showCart')->name('showCart');

Route::get('/updateCart', 'CartController@updateCart')->name('updateCart');

Route::get('/deleteCart', 'CartController@deleteCart')->name('deleteCart');

