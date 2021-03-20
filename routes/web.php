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

Route::get('/', 'ShopController@index')->name('home');
Route::get('/client', 'ShopController@client')->name('client');
Route::get('/logout', 'UserController@logout')->name('logout');
Route::get('/shops', 'ShopController@store')->name('shop');

/*Route::group(['prefix' => 'shop', 'namespace' => 'Shop', 'middleware' => 'shop'], function () {

});*/

    Route::resource('/detail', 'DetailController');
    Route::resource('/client', 'ClientController');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});
