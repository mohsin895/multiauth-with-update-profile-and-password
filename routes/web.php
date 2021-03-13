<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/update-profile', 'UpdateController@update')->name('profile.update');
Route::post('/update-profile', 'UpdateController@change')->name('profile.change');
Route::get('/update-password', 'UpdateController@updatePassword')->name('password.update');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('employ/home', 'HomeController@employHome')->name('employ.home')->middleware('is_admin');
