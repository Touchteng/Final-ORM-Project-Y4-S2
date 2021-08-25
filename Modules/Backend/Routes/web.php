<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('backend')->group(function() {
    Route::get('/', 'BackendController@index');
    Route::get('logout', 'UserController@logout');

    //Role
    Route::get('role', 'RoleController@index');
    Route::get('role/create', 'RoleController@create');
    Route::get('role/delete', 'RoleController@delete');
    Route::get('role/edit/{id}', 'RoleController@edit');
    Route::post('role/save', 'RoleController@save');
    Route::post('role/update', 'RoleController@update');

    //User
    Route::get('user', 'UserController@index');
    Route::get('user/create', 'UserController@create');
    Route::get('user/delete', 'UserController@delete');
    Route::get('user/edit/{id}', 'UserController@edit');
    Route::post('user/save', 'UserController@save');
    Route::post('user/update', 'UserController@update');

    //Page
    Route::get('page', 'PageController@index');
    Route::get('page/create', 'PageController@create');
    Route::get('page/delete', 'PageController@delete');
    Route::get('page/edit/{id}', 'PageController@edit');
    Route::post('page/save', 'PageController@save');
    Route::post('page/update', 'PageController@update');
    Route::get('page/detail/{id}', 'PageController@detail');

    //Member
    Route::get('member', 'MemberController@index');
    Route::get('member/create', 'MemberController@create');
    Route::get('member/delete', 'MemberController@delete');
    Route::get('member/edit/{id}', 'MemberController@edit');
    Route::post('member/save', 'MemberController@save');
    Route::post('member/update', 'MemberController@update');
    Route::get('member/detail/{id}', 'MemberController@detail');

    //Location
    Route::get('tag', 'TagController@index');
    Route::get('tag/create', 'TagController@create');
    Route::get('tag/delete', 'TagController@delete');
    Route::get('tag/edit/{id}', 'TagController@edit');
    Route::post('tag/save', 'TagController@save');
    Route::post('tag/update', 'TagController@update');

    //size
    Route::get('size', 'SizeController@index');
    Route::get('size/create', 'SizeController@create');
    Route::get('size/delete', 'SizeController@delete');
    Route::get('size/edit/{id}', 'SizeController@edit');
    Route::post('size/save', 'SizeController@save');
    Route::post('size/update', 'SizeController@update');

    //Company
    Route::get('product', 'ProductController@index');
    Route::get('product/create', 'ProductController@create');
    Route::get('product/delete', 'ProductController@delete');
    Route::get('product/edit/{id}', 'ProductController@edit');
    Route::post('product/save', 'ProductController@save');
    Route::post('product/update', 'ProductController@update');
    Route::get('product/detail/{id}', 'ProductController@detail');

    //Category
    Route::get('category', 'CategoryController@index');
    Route::get('category/create', 'CategoryController@create');
    Route::get('category/delete', 'CategoryController@delete');
    Route::get('category/edit/{id}', 'CategoryController@edit');
    Route::post('category/save', 'CategoryController@save');
    Route::post('category/update', 'CategoryController@update');

    //Job
    Route::get('avibility', 'AvibilityController@index');
    Route::get('avibility/create', 'AvibilityController@create');
    Route::get('avibility/delete', 'AvibilityController@delete');
    Route::get('avibility/edit/{id}', 'AvibilityController@edit');
    Route::post('avibility/save', 'AvibilityController@save');
    Route::post('avibility/update', 'AvibilityController@update');
    Route::get('avibility/search', 'AvibilityController@search');
    Route::get('avibility/detail/{id}', 'AvibilityController@detail');

    Route::get('contact','ContactController@index');
});
