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
//ユーザー側
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('item', 'ItemsController', ['only' => [ 'index','show']]);
Route::resource('review','ReviewController',['only'=>['store','edit','update','destroy']]);
Route::resource('cart','CartController',['only'=>['index','store','destroy']]);
Route::resource('user','UserController',['only'=>['show','edit','update']]);
Route::get('/buy', 'BuyController@index');
Route::post('/buy', 'BuyController@store');
Route::get('/about','AboutController@about');


//管理側
Route::group(['middleware' => ['auth.admin']], function () {

	//管理側トップ
	Route::get('/admin', 'admin\AdminTopController@show');
	//ログアウト実行
	Route::post('/admin/logout', 'admin\AdminLogoutController@logout');
	//ユーザー一覧
	Route::get('/admin/user_list', 'admin\ManageUserController@showUserList');
	//ユーザー詳細
	Route::get('/admin/user/{id}', 'admin\ManageUserController@showUserDetail');
    //商品一覧
    Route::get('/admin/item_list', 'admin\ManageItemController@showItemList');
    //商品詳細
    Route::get('/admin/item/{id}', 'admin\ManageItemController@showItemDetail');
});

//管理側ログイン
Route::get('/admin/login', 'admin\AdminLoginController@showLoginform');
Route::post('/admin/login', 'admin\AdminLoginController@login');



