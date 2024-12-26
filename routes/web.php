<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', HomeController::class, 'index')->name('mainpage');

Route::get('/', function(){
    return view('welcome');
});
