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
Route::get('/world', 'HomeController@world')->name('world.page');
Route::get('/europe', 'HomeController@europe')->name('europe.page');
Route::get('/asia', 'HomeController@asia')->name('asia.page');
Route::get('/americas', 'HomeController@americas')->name('americas.page');
Route::get('/oceania', 'HomeController@oceania')->name('oceania.page');
Route::get('/africa', 'HomeController@africa')->name('africa.page');
Route::get('/links', 'HomeController@links')->name('links.page');
