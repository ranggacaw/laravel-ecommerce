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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

// shop
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/shop-details', [App\Http\Controllers\ShopController::class, 'details'])->name('shop.details');

// cart
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

// checkoout
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
