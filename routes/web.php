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
    return view('web.inicio');
})->name("web.inicio");

Route::get('grid', function () {
    return view('web.grid');
})->name("grid");

Route::get('checkout', function () {
    return view('web.checkout');
})->name("checkout");

Route::get('shop_cart', function () {
    return view('web.shop_cart');
})->name("shop_cart");

Route::get('single', function () {
    return view('web.single');
})->name("single");

Route::get('wishlist', function () {
    return view('web.wishlist');
})->name("wishlist");

Route::get('tab', function () {
    return view('web.tab');
})->name("tab");

Route::get('tab2', function () {
    return view('web.tab2');
})->name("tab2");