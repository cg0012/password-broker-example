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

Route::get('{user_type}/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('broker.showResetForm');
Route::get('{user_type}/resetemail/', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('broker.showResetEmailForm');
Route::post('{user_type}/reset', 'Auth\ResetPasswordController@reset')->name('broker.password.update');
