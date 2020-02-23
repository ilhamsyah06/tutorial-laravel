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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();

Route::group(['middleware' => ['auth', 'checkRole:admin,kasir,gudang']], function () {
    Route::get('dashboard','DashboardController@viewpage');
    Route::get('user','UserController@index');
    Route::get('penjualan','PenjualanController@index');
    Route::get('pembelian','PembelianController@index');

});
