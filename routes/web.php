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

Route::get('/', function () {
    return view('front.index');
});

Route::get('/shopping-1', function () {
    return view('front.shopping-1');
});
Route::get('/shopping-2', function () {
    return view('front.shopping-2');
});
Route::get('/shopping-3', function () {
    return view('front.shopping-3');
});
Route::get('/shopping-4', function () {
    return view('front.shopping-4');
});

Route::get('/login', function () {
    return view('front.login');
});
