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

Route::get('/', 'FrontendController@getHome');

Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');

Route::get('category/{id}/{slug}.html','FrontendController@getCategory');

Route::get('search','FrontendController@getSearch');

Route::group(['prefix'=>'cart'],function(){
	Route::get('add/{id}','CartController@getAddCart');
	Route::get('show','CartController@getShowCart');
	Route::get('delete/{id}','CartController@getDeleteCart');
	Route::get('update','CartController@getUpdateCart');
	Route::post('show','CartController@postComplete');
});

Route::get('about','FrontendController@getAbout');

Route::get('news','FrontendController@getNews');

Route::get('mail','FrontendController@getMail');

Route::get('complete','CartController@getComplete');

Route::group(['namespace'=>'Admin'],function(){


	Route::group(['prefix'=>'admin'],function(){
			Route::group(['prefix'=>'login'],function(){
			Route::get('/','LoginController@getLogin');
			Route::post('/','LoginController@postLogin');
		});
		Route::get('logout','HomeController@getLogout');

		Route::get('home','HomeController@getHome');

		Route::group(['prefix'=>'category'],function(){
			Route::get('/','CategoryController@getCate');

			Route::get('add','CategoryController@getAddCate');
			Route::post('add','CategoryController@postAddCate');

			Route::get('edit/{id}','CategoryController@getEditCate');
			Route::post('edit/{id}','CategoryController@possEditCate');

			Route::get('delete/{id}','CategoryController@getDeleteCate');

		});

		Route::group(['prefix'=>'product'],function(){
			Route::get('/','ProductController@getProduct');

			Route::get('add','ProductController@getAddProduct');
			Route::post('add','ProductController@postAddProduct');

			Route::get('edit/{id}','ProductController@getEditProduct');
			Route::post('edit/{id}','ProductController@possEditProduct');

			Route::get('delete/{id}','ProductController@getDeleteProduct');

		});

		Route::group(['prefix'=>'news'],function(){
			Route::get('/','NewsController@getNews');

			Route::get('add','NewsController@getAddNews');

			Route::get('edit','NewsController@getEditNews');
		});
	});

});

