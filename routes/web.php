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

Route::post('/cart', [HomeController::class, 'cart'])->name('cart');
