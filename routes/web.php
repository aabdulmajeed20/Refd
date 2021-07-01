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

Route::get('register', [
    'uses' => 'HomeController@showRegister',
    'as' => 'showRegister'
]);

Route::name('auth.')->namespace('Auth')->group(function() {
    Route::post('endwLogin', [
        'uses' => 'EndowmentsController@login',
        'as' => 'endowmentLogin'
    ]);
    Route::post('endwRegister', [
        'uses' => 'EndowmentsController@register',
        'as' => 'endowmentRegister'
    ]);
    Route::post('charLogin', [
        'uses' => 'CharitiesController@login',
        'as' => 'charityLogin'
    ]);
    Route::post('charRegister', [
        'uses' => 'CharitiesController@register',
        'as' => 'charityRegister'
    ]);
});

Route::prefix('Charity')->name('charity.')->group(function() {
    Route::get('login', [
        'uses' => 'CharitiesController@showLogin',
        'as' => 'showLogin'
    ]);
    Route::get('profile', [
        'uses' => 'CharitiesController@profile',
        'as' => 'profile'
    ]);
    Route::get('logout', [
        'uses' => 'CharitiesController@logout',
        'as' => 'logout'
    ]);
});

Route::prefix('Endowment')->name('endowment.')->group(function() {
    Route::get('login', [
        'uses' => 'HomeController@showLogin',
        'as' => 'showLogin'
    ]);
    Route::get('dashboard', [
        'uses' => 'EndowmentsController@dashboard',
        'as' => 'dashboard'
    ]);
    Route::get('profile', [
        'uses' => 'EndowmentsController@profile',
        'as' => 'profile'
    ]);
    Route::get('messages', [
        'uses' => 'EndowmentsController@messages',
        'as' => 'messages'
    ]);
    Route::get('bookmarks', [
        'uses' => 'EndowmentsController@bookmarks',
        'as' => 'bookmarks'
    ]);
    Route::get('selectedProjects', [
        'uses' => 'EndowmentsController@selectedProjects',
        'as' => 'selectedProjects'
    ]);
    Route::get('inProgressProjects', [
        'uses' => 'EndowmentsController@inProgressProjects',
        'as' => 'inProgressProjects'
    ]);
    Route::get('donatedProjects', [
        'uses' => 'EndowmentsController@donatedProjects',
        'as' => 'donatedProjects'
    ]);
    Route::get('alkhair', [
        'uses' => 'EndowmentsController@alkhair',
        'as' => 'alkhair'
    ]);
    Route::get('logout', [
        'uses' => 'EndowmentsController@logout',
        'as' => 'logout'
    ]);
});



