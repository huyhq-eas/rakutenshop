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

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

// route to show the signup form
Route::get('signup', array('uses' => 'HomeController@showSignup'));

// route to process the form
Route::post('signup', array('uses' => 'HomeController@doSignup'));

// route to show shop form
Route::get('shop', array('uses' => 'ShopController@showShop'));
