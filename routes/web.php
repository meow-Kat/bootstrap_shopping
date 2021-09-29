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

Route::get('/', 'FrontController@homepage');

Route::get('/shopping-1', 'ShoppingCartController@shoppingCart1');
Route::get('/shopping-2', 'ShoppingCartController@shoppingCart2');
Route::post('/shopping-2/check', 'ShoppingCartController@paymentCheck');
Route::get('/shopping-3', 'ShoppingCartController@shoppingCart3');
Route::get('/shopping-4', 'ShoppingCartController@shoppingCart4');

Route::prefix('shopping_cart')->group(function ()
{
    Route::post('/add', 'ShoppingCartController@add');
    Route::get('/content', 'ShoppingCartController@content');
    Route::post('/update', 'ShoppingCartController@update');
    Route::get('/clear', 'ShoppingCartController@clear');

});


// Route::post('/add_item', 'FrontController@addItem');


Route::get('/product', 'FrontController@product');
Route::get('/content', 'FrontController@content');
Route::get('/update', 'FrontController@update');


Route::get('/login', 'FrontController@shoppingCart4');


Route::prefix('admin')->group(function () {
    Route::get('/', 'ProductController@admin');
    // 產品
    Route::prefix('product')->group(function () {
        Route::get('/', 'ProductController@product');
        Route::get('/add', 'ProductController@add');
        Route::post('/push', 'ProductController@push');
        Route::get('/edit/{id}', 'ProductController@edit');
        Route::post('/update/{id}', 'ProductController@update');
        Route::delete('/delete/{id}', 'ProductController@delete');
        Route::post('/deleteImg', 'FileController@deleteImg');
        // 產品種類
        Route::prefix('type')->group(function () {
            Route::get('/', 'ProductTypeController@type');
            Route::get('/add', 'ProductTypeController@add');
            Route::post('/push', 'ProductTypeController@push');
            Route::get('/edit/{id}', 'ProductTypeController@edit');
            Route::post('/update/{id}', 'ProductTypeController@update');
            Route::delete('/delete/{id}', 'ProductTypeController@delete');
        });
    });
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
