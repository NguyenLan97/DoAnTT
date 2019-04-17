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

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontendController@getHome');

Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');

Route::get('category/{id}/{slug}.html','FrontendController@getCategory');

Route::get('search','FrontendController@getSearch');

Route::group(['prefix'=>'cart'],function(){
	Route::get('add/{id}','CartController@getAddCart');
	Route::get('show','CartController@getShowCart')->name('showCart');
	Route::get('delete/{id}','CartController@getDeleteCart');
	Route::get('update','CartController@getUpdateCart');
	Route::post('show','CartController@postComplete');
	Route::post('buy','CartController@buyComplete')->name('buyComplete');
});

Route::get('about','FrontendController@getAbout');

Route::get('news','FrontendController@getNews');

Route::get('mail','FrontendController@getMail');

Route::get('complete','CartController@getComplete');

Route::get('member', 'MemberController@member');

Route::get('member/login', 'MemberController@login');
Route::post('member/login', 'Auth\LoginController@doLogin')->name('customerLogin');

Route::get('member/register', 'MemberController@register');
Route::post('member/register', 'Auth\RegisterController@register')->name('customerRegister');

Route::get('member/reset-pass', 'ResetPasswordController@showResetForm');
Route::post('member/reset-pass', 'ResetPasswordController@reset');

Route::get('member/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'member', 'middleware' => 'auth'], function (Router $group) {

});

Route::group(['namespace'=>'Admin'],function(){

	Route::group(['prefix'=>'admin'],function(){
        Route::get('/','HomeController@getHome');
        Route::get('/home','HomeController@getHome');
	    
        Route::group(['prefix'=>'login'],function(){
            Route::get('/','LoginController@getLogin');
            Route::post('/','LoginController@postLogin');
        });
        
		Route::get('logout','HomeController@getLogout');

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

		Route::group(['prefix'=>'bill'],function(){

			Route::get('/','BillController@getBill');
			Route::post('/','BillController@postBill');

		});
	});

});

