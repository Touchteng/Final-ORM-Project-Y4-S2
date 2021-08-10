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
    Route::get('location', 'LocationController@index');
    Route::get('location/create', 'LocationController@create');
    Route::get('location/delete', 'LocationController@delete');
    Route::get('location/edit/{id}', 'LocationController@edit');
    Route::post('location/save', 'LocationController@save');
    Route::post('location/update', 'LocationController@update');

    //Shift
    Route::get('shift', 'ShiftController@index');
    Route::get('shift/create', 'ShiftController@create');
    Route::get('shift/delete', 'ShiftController@delete');
    Route::get('shift/edit/{id}', 'ShiftController@edit');
    Route::post('shift/save', 'ShiftController@save');
    Route::post('shift/update', 'ShiftController@update');

    //Company
    Route::get('company', 'CompanyController@index');
    Route::get('company/create', 'CompanyController@create');
    Route::get('company/delete', 'CompanyController@delete');
    Route::get('company/edit/{id}', 'CompanyController@edit');
    Route::post('company/save', 'CompanyController@save');
    Route::post('company/update', 'CompanyController@update');
    Route::get('company/detail/{id}', 'CompanyController@detail');

    //Category
    Route::get('category', 'CategoryController@index');
    Route::get('category/create', 'CategoryController@create');
    Route::get('category/delete', 'CategoryController@delete');
    Route::get('category/edit/{id}', 'CategoryController@edit');
    Route::post('category/save', 'CategoryController@save');
    Route::post('category/update', 'CategoryController@update');

    //Job
    Route::get('job', 'JobController@index');
    Route::get('job/create', 'JobController@create');
    Route::get('job/delete', 'JobController@delete');
    Route::get('job/edit/{id}', 'JobController@edit');
    Route::post('job/save', 'JobController@save');
    Route::post('job/update', 'JobController@update');
    Route::get('job/search', 'JobController@search');
    Route::get('job/detail/{id}', 'JobController@detail');
});
