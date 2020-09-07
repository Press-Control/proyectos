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
    return view('inicio');
})->name("inicio");

Route::get('grid', function () {
    return view('grid');
})->name("grid");

Route::get('checkout', function () {
    return view('checkout');
})->name("checkout");

Route::get('shop_cart', function () {
    return view('shop_cart');
})->name("shop_cart");

Route::get('single', function () {
    return view('single');
})->name("single");

Route::get('wishlist', function () {
    return view('wishlist');
})->name("wishlist");