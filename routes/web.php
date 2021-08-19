<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('', 'IndexController@index')->name('home');
Route::get('/product','IndexController@product')->name('product');
Route::get('/product/{id?}','IndexController@productCategory')->name('category');
Route::get('/product/tag/{id?}','IndexController@productTag')->name('tag');
Route::get('/about-us','IndexController@about')->name('about');
