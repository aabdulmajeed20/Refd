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
    return view('Home.index');
});

Route::name('auth.')->namespace('Auth')->group(function() {
    Route::get('login', [
        'uses' => 'AuthController@showLogin',
        'as' => 'showLogin'
    ]);
    Route::get('register', [
        'uses' => 'AuthController@showRegister',
        'as' => 'showRegister'
    ]);
    Route::post('endwLogin', [
        'uses' => 'AuthController@endowmentLogin',
        'as' => 'endowmentLogin'
    ]);
    Route::post('charLogin', [
        'uses' => 'AuthController@charLogin',
        'as' => 'charLogin'
    ]);
});



