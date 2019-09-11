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
// Route::get('/', 'LoginController@index');

Route::post('login', 'LoginController@check_login');

//Dasboard Merchant
Route::get('dashboardmerchant', 'dashboardMerchantController@index');

//Admin
Route::get('admin', 'adminController@index');

//CRUD Kategori
Route::get('kategori', 'kategori_produkController@index');
Route::get('/kategori/tambah', 'kategori_produkController@add_kategori');
Route::post('/kategori/simpan', 'kategori_produkController@save_add_kategori');
Route::get('/kategori/edit/{id}', 'kategori_produkController@edit_kategori');
Route::put('/kategori/update/{id}', 'kategori_produkController@save_update_kategori');
Route::get('/kategori/hapus/{id}', 'kategori_produkController@hapus');
