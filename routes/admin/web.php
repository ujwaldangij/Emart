<?php

use App\Http\Controllers\admin\dashboard;
use Illuminate\Support\Facades\Route;

Route::controller(dashboard::class)->group(function () {
    Route::middleware(['guest'])->prefix('admin')->group(function () {
        Route::get('/get_register', 'get_register')->name('get_register');
        Route::post('/post_register', 'post_register')->name('post_register');
        Route::get('/get_login', 'get_login')->name('get_login');
        Route::post('/post_login', 'post_login')->name('post_login');
    });

    Route::middleware(['auth'])->prefix('admin')->group(function () {
        Route::get('/get_dashboard', 'get_dashboard')->name('get_dashboard');
        Route::get('/get_destroy_login', 'get_destroy_login')->name('get_destroy_login');
    });
});
