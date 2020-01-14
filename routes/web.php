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

Route::get('/','Controller@index')->name('index');
Route::get('/product','Controller@product')->name('product');
Route::get('/blog','Blog\Controller@bloghome')->name('bloghome');
Route::get('/blog/post/{post_id}','Blog\Controller@blogpost')->name('blogpost');


Route::get('/admin','Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');



Route::get('/admin/home', 'HomeController@index')->name('home');
