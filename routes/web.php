<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/single-product/{id}', [HomeController::class, 'single_product'])->name('single_product');
Route::get('/auctions', [HomeController::class, 'auction'])->name('auction');
Route::get('/art', [HomeController::class, 'art'])->name('art');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/add_to_cart',[HomeController::class,'add_to_cart'])->name('add_to_cart');
Route::post('/remove_from_cart', [HomeController::class, 'remove_from_cart'])->name('remove_from_cart');
Route::post('/change_quantity', [HomeController::class, 'change_quantity'])->name('change_quantity');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::get('/profile', [LoginController::class, 'showProfile'])->name('profile');

Route::get('/dashboard', [LoginController::class, 'showDashboard'])->name('dashboard');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [LoginController::class, 'showSignup'])->name('signup');
Route::post('/signup', [LoginController::class, 'register']);

Route::get('/view-art', [AdminController::class, 'showArtItems'])->name('admin-art');
Route::get('/view-auction', [AdminController::class, 'showAuctionItems'])->name('admin-auction');

Route::get('/delete-product/{id}', [AdminController::class, 'delete'] )->name('delete');

Route::get('/edit-product/{id}', [AdminController::class, 'edit'] )->name('edit');

Route::post('/update-product/{id}', [AdminController::class, 'update'] )->name('update');

Route::post('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::post('/processPayment', [PaymentController::class, 'processPayment'])->name('processPayment');
Route::post('/confirm-payment/{order_id}/{method}', [PaymentController::class, 'confirmPayment'])->name('confirmPayment');
