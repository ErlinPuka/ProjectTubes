<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OutletController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
});

Route::get('/Werehouse', 'werehouseController@index') -> name('Werehouse');
Route::get('/werehouse-entry', 'werehouseController@create') -> name('werehouse-entry');
Route::post('/werehouse-proses', 'werehouseController@store') -> name('werehouse-proses');
Route::get('/werehouse-edit/{id}', 'werehouseController@edit') -> name('werehouse-edit');
Route::post('/werehouse-proses', 'werehouseController@store') -> name('werehouse-proses');
Route::post('/werehouse-update/{id}', 'werehouseController@update') -> name('werehouse-update');
Route::get('/werehouse-hapus/{id}', 'werehouseController@delete') -> name('werehouse-hapus');
Route::get('/werehouse-cetak', 'werehouseController@downloadpdf') -> name('werehouse-cetak');

Route::get('/products', 'ProductController@index') -> name('products');
Route::get('/products-entry', 'ProductController@create') -> name('products-entry');
Route::post('/products-proses', 'ProductController@store') -> name('products-proses');
Route::get('/products-edit/{id}', 'ProductController@edit') -> name('products-edit');
Route::post('/products-update/{id}', 'ProductController@update') -> name('products-update');
Route::get('/products-hapus/{id}', 'ProductController@delete') -> name('products-hapus');
Route::get('/products-cetak', 'ProductController@downloadpdf') -> name('products-cetak');

Route::get('/employee', 'EmployeeController@index') -> name('employee');
Route::get('/employee-entry', 'EmployeeController@create') -> name('employee-entry');
Route::post('/employee-proses', 'EmployeeController@store') -> name('employee-proses');
Route::get('/employee-edit/{id}', 'EmployeeController@edit') -> name('employee-edit');
Route::post('/employee-update/{id}', 'EmployeeController@update') -> name('employee-update');
Route::get('/employee-hapus/{id}', 'EmployeeController@delete') -> name('employee-hapus');
Route::get('/employee-cetak', 'EmployeeController@downloadpdf') -> name('employee-cetak');

Route::get('/outlet', 'OutletController@index') -> name('outlet');
Route::get('/outlet-entry', 'OutletController@create') -> name('outlet-entry');
Route::post('/outlet-proses', 'OutletController@store') -> name('outlet-proses');
Route::get('/outlet-edit/{id}', 'OutletController@edit') -> name('outlet-edit');
Route::post('/outlet-update/{id}', 'OutletController@update') -> name('outlet-update');
Route::get('/outlet-hapus/{id}', 'OutletController@delete') -> name('outlet-hapus');
Route::get('/outlet-cetak', 'OutletController@downloadpdf') -> name('outlet-cetak');

Route::get('/customer', 'CustomerController@index') -> name('customer');
Route::get('/customer-entry', 'CustomerController@create') -> name('customer-entry');
Route::post('/customer-proses', 'CustomerController@store') -> name('customer-proses');
Route::get('/customer-edit/{id}', 'CustomerController@edit') -> name('customer-edit');
Route::post('/customer-update/{id}', 'CustomerController@update') -> name('customer-update');
Route::get('/customer-hapus/{id}', 'CustomerController@delete') -> name('customer-hapus');
Route::get('/customer-cetak', 'CustomerController@downloadpdf') -> name('customer-cetak');

Route::get('/transportasi', 'TransportasiController@index') -> name('transportasi');
Route::get('/transportasi-entry', 'TransportasiController@create') -> name('transportasi-entry');
Route::post('/transportasi-proses', 'TransportasiController@store') -> name('transportasi-proses');
Route::get('/transportasi-edit/{id}', 'TransportasiController@edit') -> name('transportasi-edit');
Route::post('/transportasi-update/{id}', 'TransportasiController@update') -> name('transportasi-update');
Route::get('/transportasi-hapus/{id}', 'TransportasiController@delete') -> name('transportasi-hapus');

Route::get('/drivers', 'DriverController@index') -> name('drivers');
Route::get('/driver-entry', 'DriverController@create') -> name('driver-entry');
Route::post('/driver-proses', 'DriverController@store') -> name('driver-proses');
Route::get('/driver-edit/{id}', 'DriverController@edit') -> name('driver-edit');
Route::post('/driver-update/{id}', 'DriverController@update') -> name('driver-update');
Route::get('/driver-hapus/{id}', 'DriverController@delete') -> name('driver-hapus');
Route::get('/driver-cetak', 'DriverController@downloadpdf') -> name('driver-cetak');

Route::get('/jadwal', 'JadwalController@index') -> name('jadwal');
Route::get('/jadwal-entry', 'JadwalController@create') -> name('jadwal-entry');
Route::post('/jadwal-proses', 'JadwalController@store') -> name('jadwal-proses');
Route::get('/jadwal-edit/{id}', 'JadwalController@edit') -> name('jadwal-edit');
Route::post('/jadwal-update/{id}', 'JadwalController@update') -> name('jadwal-update');
Route::get('/jadwal-hapus/{id}', 'JadwalController@delete') -> name('jadwal-hapus');
Route::get('/jadwal-cetak', 'JadwalrController@downloadpdf') -> name('jadwal-cetak');