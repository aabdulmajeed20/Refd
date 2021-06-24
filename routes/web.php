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
Route::get('login', [
    'uses' => 'HomeController@showLogin',
    'as' => 'showLogin'
]);
Route::get('register', [
    'uses' => 'HomeController@showRegister',
    'as' => 'showRegister'
]);

Route::name('auth.')->namespace('Auth')->group(function() {
    Route::post('endwLogin', [
        'uses' => 'EndowmnetsController@login',
        'as' => 'endowmentLogin'
    ]);
    Route::post('charLogin', [
        'uses' => 'CharitiesController@login',
        'as' => 'charityLogin'
    ]);
    Route::post('endwRegister', [
        'uses' => 'EndowmnetsController@register',
        'as' => 'endowmentRegister'
    ]);
    Route::post('charRegister', [
        'uses' => 'CharitiesController@register',
        'as' => 'charityRegister'
    ]);
});



