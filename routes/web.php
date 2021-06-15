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

Route::get('/shopping-1','FrontController@shoppingCart1');
Route::get('/shopping-2', 'FrontController@shoppingCart2');
Route::get('/shopping-3', 'FrontController@shoppingCart3');
Route::get('/shopping-4', 'FrontController@shoppingCart4');

Route::get('/login', 'FrontController@shoppingCart4');




Route::get('/admin', 'ProductController@admin');

Route::get('/admin/product', 'ProductController@product' );

Route::get('/admin/product/add', 'ProductController@add');

// 對單獨資料操作
Route::post('/admin/product/push', 'ProductController@push');
Route::get('/admin/product/edit/{id}', 'ProductController@productEdit');
Route::post('/admin/product/update/{id}', 'ProductController@productUpdate');
Route::delete('/admin/product/delete/{id}', 'ProductController@productDelete');


