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
    return view('starter.dashboardv1');
})->name('dashboard');

Route::view('starter/dashboardv1', 'starter/dashboardv1')->name('home');
Route::view('qds', 'qds')->name('qds');
Route::view('generator', 'generator')->name('generator');
Route::view('wallet/qae', 'wallet/qae')->name('wallet');
Route::view('wallet/testwallet', 'wallet/testwallet')->name('testwallet');
Route::view('404', '404')->name('documentation');
