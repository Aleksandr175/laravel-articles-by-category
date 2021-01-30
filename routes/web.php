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

Route::get('/', 'HomeController@index')->name('main-page');
Route::get('/category/{category}', 'HomeController@index')->name('articlesByCategory');

Route::get('/articles/{slug}', 'ArticlesController@show')->name('article.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('article.edit');

Auth::routes();

Route::get('/admin', 'Admin\AdminController@index')->name('admin-home')->middleware('auth');
