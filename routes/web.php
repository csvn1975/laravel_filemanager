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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Auth')->group(function() {
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    
    // Login routes
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@adminLogin')->name('admin.login.submit');

    // Logout route
    Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');

    // Register route
    Route::get('/register', 'AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'AdminRegisterController@register')->name('admin.register.submit');

    // Password reset route
    Route::get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

    Route::get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AdminResetPasswordController@reset')->name('admin.password.update');
   }) ;


   Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
  });