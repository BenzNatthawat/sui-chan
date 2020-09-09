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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('master', 'Master\MasterController');
Route::resource('master/manager_header', 'Master\ManagerHeaderController');
Route::resource('header', 'Header\HeaderController');
Route::resource('header/manager_admin', 'Header\ManagerAdminController');
Route::resource('admin', 'Admin\AdminController');
Route::resource('profile', 'ProfileController');