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

Route::group(['prefix' => 'coaches'], function () {
    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('coaches.showResetForm');
    Route::get('/resetemail/{user_type}', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('coaches.showResetEmailForm');
    Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('coaches.password.update');
});

Route::group(['prefix' => 'admins'], function () {
    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admins.showResetForm');
    Route::get('/resetemail/{user_type}', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admins.showResetEmailForm');
    Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('admins.password.update');
});