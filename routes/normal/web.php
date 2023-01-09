<?php

use App\Http\Controllers\normal\home;
use Illuminate\Support\Facades\Route;

Route::controller(home::class)->group(function()
{
    Route::get('/','get_home')->name('get_home');
    Route::get('/about','get_about')->name('get_about');
    Route::get('/product','get_product')->name('get_product');
    Route::get('/whyus','get_whyus')->name('get_whyus');
    Route::get('/testimonial','get_testimonial')->name('get_testimonial');
});
