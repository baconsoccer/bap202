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

Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/change-password', 'ProfileController@editPassword')
        ->name('profile.show_password_form');
    Route::put('/update-password', 'ProfileController@updatePassword')
        ->name('profile.update_password');
    Route::get('/users', 'UserController@list')
        ->middleware('is.admin')
        ->name('user.list');

});