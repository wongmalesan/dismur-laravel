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
Route::get('/admin', 'adminController@index');
Route::get('/admin/merchant', 'adminController@get_merchant');
Route::get('/admin/merchant/tambahMerchant', 'adminController@add_merchant');
Route::post('/admin/merchant/tambahMerchant/simpan', 'adminController@proses_add_merchant');
Route::get('/admin/merchant/editMerchant/{id}', 'adminController@edit_merchant');
Route::put('/admin/merchant/editMerchant/update/{id}', 'adminController@proses_update_merchant');
Route::get('/admin/merchant/hapusMerchant/{id}', 'adminController@hapus_merchant');
//====produk
Route::get('/admin/produk', 'adminController@get_produk');
Route::get('/admin/produk/tambahProduk', 'adminController@add_produk');
Route::post('/admin/produk/tambahProduk/simpan', 'adminController@proses_add_produk');



//CRUD Kategori
Route::get('/kategori', 'kategori_produkController@index');
Route::get('/kategori/tambah', 'kategori_produkController@add_kategori');
Route::post('/kategori/simpan', 'kategori_produkController@save_add_kategori');
Route::get('/kategori/edit/{id}', 'kategori_produkController@edit_kategori');
Route::put('/kategori/update/{id}', 'kategori_produkController@save_update_kategori');
Route::get('/kategori/hapus/{id}', 'kategori_produkController@hapus');

//CRUD Merchant
Route::get('/merchant', 'merchantController@index');
Route::get('/merchant/tambah', 'merchantController@add');
Route::post('/merchant/simpan', 'merchantController@save_add');
Route::get('/merchant/edit/{id}', 'merchantController@edit');
Route::put('/merchant/update/{id}', 'merchantController@save_update');
Route::get('/merchant/hapus/{id}', 'merchantController@hapus');

//Testing
Route::get('/test', 'testingController@Testing');
Route::post('/testpost', 'testingController@TestingPost');
