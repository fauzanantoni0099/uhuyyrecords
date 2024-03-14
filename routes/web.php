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

Route::get('/', function () {
    return view('front.index');
});
Route::get('/blog','FrontController@blog')->name('blog');
Route::get('/albums','FrontController@albums')->name('albums');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/elements','FrontController@elements')->name('elements');
Route::get('/event','FrontController@event')->name('event');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
