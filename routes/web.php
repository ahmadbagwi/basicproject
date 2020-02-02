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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/beranda', 'HomeController@beranda')->name('beranda');

Route::group(['middleware' => ['web', 'auth', 'roles']],function(){
	Route::get('/dashboard', 'Dashboard@index')->name('dashboard');
	Route::group(['roles'=>'root'],function(){
		Route::resource('site', 'SiteController');
	});
 
	Route::group(['roles'=>'admin'],function(){
		Route::resource('admin', 'UserController');
	});
});