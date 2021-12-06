<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('part/db1');
// });
// Route::get('/2', function () {
//     return view('part/db2');
// });
// Route::get('/produk', function () {
//     return view('part/db3');
// });
// Route::get('/tambah', function () {
//     return view('produk/tambah_produk');
// });

// Produk
    Route::get('/',[ProductController::class,'index'])
    ->name('produk');

    Route::get('/produk/tambah',[ProductController::class,'create'])
    ->name('tambahProduk');

    Route::post('/produk/store',[ProductController::class,'store'])
    ->name('storeProduk');

    Route::get('/produk/delete/{id}',[ProductController::class,'destroy'])
    ->name('hapusProduk');

    Route::get('/produk/edit/{id}',[ProductController::class,'edit'])
    ->name('editProduk');

    Route::post('/produk/update/{id}',[ProductController::class,'update'])
    ->name('updateProduk');
// Produk

// Customer
    Route::get('/customer',[CustomerController::class,'index'])
    ->name('customer');

    Route::get('/customer/tambah',[CustomerController::class,'create'])
    ->name('tambahCustomer');

    Route::post('/customer/store',[CustomerController::class,'store'])
    ->name('storeCustomer');

    Route::get('/customer/delete/{id}',[CustomerController::class,'destroy'])
    ->name('hapusCustomer');

    Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])
    ->name('editCustomer');

    Route::post('/customer/update/{id}',[CustomerController::class,'update'])
    ->name('updateCustomer');
// Customer