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

Route::get('/', 'SiteController@Home')->name('home');
Route::get('/index', 'SiteController@Home')->name('home');
Route::get('/home', 'SiteController@Home')->name('home');
Route::get('/contact', 'SiteController@Contact')->name('contact');
