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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{slug}', 'ShopController@show')->name('shop.show');
Route::get('/addproduct', 'ShopController@create')->name('shop.create');
Route::post('/addproduct', 'ShopController@store')->name('shop.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::post('removeCart', 'CartController@removeCart')->name('removeCart');
Route::post('additem', 'CartController@itemAdd')->name('item.add');
Route::post('updateCart', 'CartController@itemSub')->name('item.sub');
Route::post('paynow', 'CartController@payment')->name('payment');
Route::get('/ona', 'ShopController@ona')->name('ona');


