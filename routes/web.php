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
Route::get('/buy', 'BuyController@index')->middleware('auth');
Route::post('/buy', 'BuyController@store');
Route::get('/about','AboutController@about');


//管理側
Route::group(['middleware' => ['auth.admin']], function () {

	//管理側トップ
	Route::get('/admin', 'Admin\AdminTopController@show');
	//ログアウト実行
	Route::post('/admin/logout', 'Admin\AdminLogoutController@logout');
	//ユーザー一覧
	Route::get('/admin/user_list', 'Admin\ManageUserController@showUserList');
	//ユーザー詳細
	Route::get('/admin/user/{id}', 'Admin\ManageUserController@showUserDetail');
    //商品一覧
    Route::get('/admin/item_list', 'Admin\ManageItemController@index')->name('admin.item.index');
    //商品詳細
    Route::get('/admin/item/{id}', 'Admin\ManageItemController@show')->name('admin.item.show');
    //商品情報編集
    Route::get('/admin/item/{id}/edit', 'Admin\ManageItemController@edit');
    //商品情報アップデート
    Route::put('/admin/item/{id}/', 'Admin\ManageItemController@update')->name('admin.item.update');
    //商品情報新規作成
    Route::get('/admin/add', 'Admin\ManageItemController@add')->name('admin.item_add');
    //新規作成実行
    Route::post('/admin/create', 'Admin\ManageItemController@create')->name('admin.item_create');
    //購入情報
    Route::get('/admin/order_list','Admin\ManageOrderController@index')->name('admin.order_list');
    //購入情報詳細ページ
    Route::get('/admin/order/{id}','Admin\ManageOrderController@show')->name('admin.order.show');
});

//管理側ログイン
Route::get('/admin/login', 'Admin\AdminLoginController@showLoginform');
Route::post('/admin/login', 'Admin\AdminLoginController@login');



