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


/* home */
Route::get('/', function () {
    return view('starter.dashboardv1');
})->name('dashboard');
Route::view('starter/dashboardv1', 'starter/dashboardv1')->name('home');
Route::view('404', '404')->name('404');

/* wallet */
Route::view('wallet/qae', 'wallet/qae')->name('wallet');
Route::view('wallet/testwallet', 'wallet/testwallet')->name('testwallet');

/* tools */
Route::view('tools/batch', 'tools/batch')->name('batch');
Route::view('tools/paperwallet', 'tools/paperwallet')->name('paperwallet');
Route::view('tools/parameters', 'tools/parameters')->name('parameters');
Route::view('tools/qds', 'tools/qds')->name('qds');
Route::view('tools/generator', 'tools/generator')->name('generator');
Route::view('tools/voting', 'tools/voting')->name('voting');

/* explorer */
Route::view('explorer/tokens', 'explorer/tokens')->name('tokens');
Route::view('explorer/transactions', 'explorer/transactions')->name('transactions');
Route::view('explorer/topwallets', 'explorer/topwallets')->name('topwallets');
Route::view('explorer/delegates', 'explorer/delegates')->name('delegates');
Route::view('explorer/peers', 'explorer/peers')->name('peers');

/* documentation */
Route::view('documentation', '404')->name('documentation');

/* exchanges */
Route::view('exchanges', 'exchanges')->name('exchanges');
