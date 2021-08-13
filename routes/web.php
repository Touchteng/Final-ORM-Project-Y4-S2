<?php

use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('', 'IndexController@index')->name('home');
Route::get('/product','IndexController@product')->name('product');
Route::get('/about-us','IndexController@about')->name('about');
