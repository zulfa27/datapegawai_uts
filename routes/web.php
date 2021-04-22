<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

Route::get('/list-pegawai', [PegawaiController::class, 'list']);

Route::get('/tambah-pegawai', function () {
    return view('tambah-pegawai');
});
Route::post('/simpan-pegawai', [PegawaiController::class, 'simpan']);
Route::get('/hapus-pegawai/{id}', [PegawaiController::class, 'hapus']);
Route::get('/ubah-pegawai/{id}', [PegawaiController::class, 'ubah']);
Route::post('/ubah-pegawai', [PegawaiController::class, 'rubah']);
