<?php

Auth::routes();
Route::get('/', 'IndexController@index');    
Route::get('/home', 'HomeController@index')->name('home');
Route::get('post', 'PostController@index');
Route::post('post/save', 'PostController@save');
Route::get('detail/{id}', 'IndexController@detail');
