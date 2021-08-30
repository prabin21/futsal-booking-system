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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/adminoffutsal',function(){
   return view('admin.adminregister'); 
});

//Route::get('admin/home','AdminController@index')->name('admin.admin');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.adminlogin');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/adminregister','Admin\RegisterController@store');
Route::get('admin/admindashboard','Admin\AdminController@index');

Route::get('/booking', 'BookingController@index');
Route::post('/booking', 'BookingController@store');


Route::get('/package', 'PackageController@index');
Route::post('/enterpackage', 'PackageController@store');
Route::get('/delpack/{id}', 'PackageController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
