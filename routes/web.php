<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/single-product', [HomeController::class, 'single_product'])->name('single_product');
Route::get('/auctions', [HomeController::class, 'auction'])->name('auction');
Route::get('/art', [HomeController::class, 'art'])->name('art');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/add_to_cart',[HomeController::class,'add_to_cart'])->name('add_to_cart');
Route::post('/remove_from_cart', [HomeController::class, 'remove_from_cart'])->name('remove_from_cart');
Route::post('/change_quantity', [HomeController::class, 'change_quantity'])->name('change_quantity');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
