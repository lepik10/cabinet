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

Route::get('/', 'PageController@index');

Route::get('/login', 'UserController@login');
Route::prefix('registration')->group(function () {
    Route::get('/{type?}', 'UserController@registration');
    Route::post('/', 'UserController@create')->name('user.create');
});

Route::get('test', function() {
    echo __('fields.name.name');
});
