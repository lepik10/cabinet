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

Route::get('/', 'PageController@index')->name('main');

Route::get('/login/{type?}', 'UserLoginController@index')->name('user.login');
Route::post('/login', 'UserLoginController@login')->name('user.login.check');
Route::get('/logout', 'UserLoginController@logout')->name('user.logout');

Route::prefix('registration')->group(function () {
    Route::get('/{type?}', 'UserRegistrationController@index')->name('user.registration');
    Route::post('/', 'UserRegistrationController@create')->name('user.create');
});

Route::prefix('cabinet')->group(function () {
    Route::get('/', 'CabinetController@index')->name('cabinet.index');
    Route::get('/info', 'CabinetController@info')->name('cabinet.info');
});

Route::get('test', function() {
    echo __('fields.name.name');
});
