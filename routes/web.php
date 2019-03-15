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


Route::group(['middleware' =>['web']], function(){
	Route::get('/','Theme\ThemeController@index')->name('index');
	Route::post('/','Theme\ThemeController@ajaxRequest')->name('ajaxRequest');
	Route::get('/rooms','Theme\ThemeController@rooms')->name('rooms');
	Route::get('/amnities','Theme\ThemeController@amnities')->name('amnities');
	Route::get('/about','Theme\ThemeController@about')->name('about');
	Route::get('/contact','Theme\ThemeController@contact')->name('contact');
	Route::post('/contact','Theme\ThemeController@message')->name('message');
	Route::post('/contact/book','Theme\ThemeController@book')->name('book');
});

Auth::routes();

Route::group(['middleware' =>['auth']], function(){
	Route::get('admin/home', 'HomeController@index')->name('home');
	Route::resource('admin/room', 'Admin\RoomController');
	Route::resource('admin/booking', 'Admin\BookinController');
	Route::resource('admin/message', 'Admin\MessageController');
});
