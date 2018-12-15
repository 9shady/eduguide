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

Route::get('/', 'PagesController@index')->name('index');
Route::resource('posts', 'PostsController');

Auth::routes();
Route::get('/home', 'DashboardController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
    
    Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
    Route::get('/login', 'Auth\AdminLoginController@showAdminLogin')->name('admin.login');
    Route::post('/login/submit', 'Auth\AdminLoginController@adminLogin')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/supervisor1', 'Supervisor1Controller@index')->name('admin.supervisor1');
    Route::get('/supervisor2', 'Supervisor2Controller@index')->name('admin.supervisor2');
});


 
