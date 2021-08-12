<?php

Auth::routes();
Route::get('/', 'IndexController@index');    
Route::get('/product','IndexController@product');
