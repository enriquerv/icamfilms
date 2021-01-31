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

// Route::get('/', function () { return view('welcome'); });

Route::get('/', array('as' => 'video', 'uses' => 'FrontEndController@video'));
Route::get('home', array('as' => 'home', 'uses' => 'FrontEndController@home'));
Route::get('aboutus', array('as' => 'aboutus', 'uses' => 'FrontEndController@aboutus'));
Route::get('services', array('as' => 'services', 'uses' => 'FrontEndController@services'));
Route::get('portfolio', array('as' => 'portfolio', 'uses' => 'FrontEndController@portfolio'));