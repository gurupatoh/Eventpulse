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
Route::get('/home', 'homeController@index')->name('home.index');
Route::get('/home/show/{product}', 'homeController@show')->name('home.show');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{ticket}', 'CartController@destroy')->name('cart.destroy');
Route::get('empty',function (){
    Cart::destroy();

});
