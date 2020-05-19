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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/antrian', 'AntrianController@index')->name('antrian');
Route::get('/delivery', 'DeliveryController@index')->name('delivery');
Route::get('/riwayatOrder', 'RiwayatorderController@index')->name('riwayatOrder');
Route::get('/riwayatOrder/tambah','RiwayatorderController@tambah');
Route::post('/riwayatOrder/store','RiwayatorderController@store');
Route::get('/riwayatOrder/edit/{id}','RiwayatorderController@edit');
Route::post('/riwayatOrder/update','RiwayatorderController@update');
Route::get('/riwayatOrder/hapus/{id}','RiwayatorderController@hapus');