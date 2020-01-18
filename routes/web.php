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
Route::view('tools/qds', 'tools/qds')->name('qds');
Route::view('tools/generator', 'tools/generator')->name('generator');
Route::view('wallet/qae', 'wallet/qae')->name('wallet');
Route::view('wallet/testwallet', 'wallet/testwallet')->name('testwallet');
Route::view('documentation', '404')->name('documentation');
Route::view('tools/batch', 'tools/batch')->name('batch');
Route::view('404', '404')->name('404');
Route::view('tools/paperwallet', 'tools/paperwallet')->name('paperwallet');
Route::view('tools/parameters', 'tools/parameters')->name('parameters');
Route::view('explorer/tokens', 'explorer/tokens')->name('tokens');
Route::view('exchanges/overview', 'exchanges/overview')->name('overview');
Route::view('exchanges/altilly', 'exchanges/altilly')->name('altilly');
Route::view('exchanges/atomars', 'exchanges/atomars')->name('atomars');
Route::view('exchanges/stex', 'exchanges/stex')->name('stex');
