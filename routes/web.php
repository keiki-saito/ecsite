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
   return view('layouts.top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('item', 'ItemsController', ['only' => [ 'index','show']]);
Route::resource('review','ReviewController',['only'=>['store','edit','update','destroy']]);
Route::resource('cart','CartController',['only'=>['index','store']]);
Route::get('/buy', 'BuyController@index');
Route::post('/buy', 'BuyController@store');
Route::get('/user','UserController@show');
