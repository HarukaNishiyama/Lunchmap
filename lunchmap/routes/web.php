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

Route::get('/shops','ShopController@index')->name('shop.list');
Route::get('/shop/new','ShopController@create')->name('shop.new');
Route::post('/shop','ShopController@store')->name('shop.store');
// newとかぶるから{id}のルートは下に書く
Route::get('/shop/{id}','ShopController@show')->name('shop.detail');


Route::get('/', function () {
    return view('/shops');
});
