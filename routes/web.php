<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@exit')->name('logout.perform');
    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Product Routes
         */
        Route::get('candidato', 'ProductController@candidato')->name('home.candidato');
		
        Route::get('product', 'ProductController@index')->name('product.list');
        Route::get('create', 'ProductController@create')->name('product.create');
        Route::post('store', 'ProductController@store')->name('product.store');
        Route::get('edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('update/{id}', 'ProductController@update')->name('product.update');
        Route::post('delete/{id}', 'ProductController@destroy')->name('product.remove');
    });
	
	Route::group(['middleware' => ['auth']], function() {
        /**
         * Cart Routes
         */
		Route::get('cart', 'CartController@cartList')->name('cart.list');
		Route::post('cart', 'CartController@addToCart')->name('cart.store');
		Route::post('update-cart', 'CartController@updateCart')->name('cart.update');
		Route::post('remove', 'CartController@removeCart')->name('cart.remove');
		Route::post('clear', 'CartController@clearAllCart')->name('cart.clear');
		Route::get('shop', 'CartController@shop')->name('cart.shop');

	});

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Cart Routes
         */
        Route::get('order', 'OderController@index')->name('order.list');
        Route::get('orders/{order}', 'OderController@generateInvoice')->name('order.generate');
    });
});
