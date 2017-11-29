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

Auth::routes();

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@show');
Route::resource('posts', 'PostController');
Route::get('/page1', 'HomeController@page')->name('first.page');
Route::get('/page2', 'HomeController@page2')->name('second.page');
Route::get('/page3', 'HomeController@page3')->name('third.page');
