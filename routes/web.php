<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbdulRohmanMasrifan1462200195HomeController;
use App\Http\Controllers\AbdulRohmanMasrifan1462200195TeaterController;
use App\Http\Controllers\AbdulRohmanMasrifan1462200195MahasiswaController;


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
    return view('layout.main_layout');
});


Route::get('home', [AbdulRohmanMasrifan1462200195HomeController::class, 'index'])->name('home');
Route::get('teater', [AbdulRohmanMasrifan1462200195TeaterController::class, 'index'])->name('teater');

// Route untuk halaman dashboard admin
Route::prefix('/mahasiswa')->group(function () {
    // Route API get data last NBI by prodi
    Route::get('/last-nbi/{prodiId}', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'getLastNbiByProdiId']);

    // Route API Handle form mahasiswa
    Route::get('/', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/tambah', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'formTambah'])->name('mahasiswa.tambah');
    Route::get('/ubah/{mhs_id}', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'formUbah'])->name('mahasiswa.ubah');

    // Route API CRUD
    Route::post('/api-tambah/', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'tambahData'])->name('mahasiswa.api-tambah');
    Route::post('/api-ubah/', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'ubahData'])->name('mahasiswa.api-ubah');
    Route::get('/api-hapus/{mhs_id}', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'hapusData'])->name('mahasiswa.api-hapus');
    Route::get('/api-cetak-pdf', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'cetakDataPdf'])->name('mahasiswa.api-cetak-pdf');
    Route::get('/api-cetak-excel', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'cetakDataExcel'])->name('mahasiswa.api-cetak-excel');
});


