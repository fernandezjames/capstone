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
    return view('welcome');
});

Route::get('/home', array('uses' => 'HomeController@home', 'as' => 'home'));
Route::get('/product', array('uses' => 'HomeController@product', 'as' => 'product'));
Route::get('/contact', array('uses' => 'HomeController@contact', 'as' => 'contact'));
Route::get('/gallery', array('uses' => 'HomeController@gallery', 'as' => 'gallery'));
Route::get('/services', array('uses' => 'HomeController@services', 'as' => 'services'));

Route::post('/save', array('uses' => 'HomeController@register', 'as' => 'register'));