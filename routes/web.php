<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('', 'IndexController@index')->name('home');
Route::get('/product','IndexController@product')->name('product');
Route::get('/product/{id?}','IndexController@productCategory')->name('category');
Route::get('/product/tag/{id?}','IndexController@productTag')->name('tag');
Route::get('/about-us','IndexController@about')->name('about');


Route::get('stripe/{id}', 'StripeController@stripe')->name('stripe');
Route::post('stripe', 'StripeController@stripePost')->name('stripe.post');

Route::get('/search','IndexController@search')->name('search');

Route::get('/contact', 'IndexController@contact')->name('contact');
Route::post('/contact/post', 'IndexController@contact_save')->name('contact.post');
