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

Route::get('/', [AbdulRohmanMasrifan1462200195HomeController::class, 'index'])->name('home');
Route::get('home', [AbdulRohmanMasrifan1462200195HomeController::class, 'index'])->name('home');

// Route untuk halaman teater
Route::prefix('/teater')->group(function () {
    // Route API Handle form teater
    Route::get('/', [AbdulRohmanMasrifan1462200195TeaterController::class, 'index'])->name('teater');
    Route::get('/tambah', [AbdulRohmanMasrifan1462200195TeaterController::class, 'formTambah'])->name('teater.tambah');
    Route::get('/ubah/{mhs_id}', [AbdulRohmanMasrifan1462200195TeaterController::class, 'formUbah'])->name('teater.ubah');

    // Route API CRUD
    Route::post('/api_tambah/', [AbdulRohmanMasrifan1462200195TeaterController::class, 'tambahData'])->name('teater.api_tambah');
    Route::post('/api_ubah/', [AbdulRohmanMasrifan1462200195TeaterController::class, 'ubahData'])->name('teater.api_ubah');
    Route::delete('/api_hapus/{mhs_id}', [AbdulRohmanMasrifan1462200195TeaterController::class, 'hapusData'])->name('teater.api_hapus');
    Route::get('/api_cetak_pdf', [AbdulRohmanMasrifan1462200195TeaterController::class, 'cetakDataPdf'])->name('teater.api_cetak_pdf');
    Route::get('/api_cetak_excel', [AbdulRohmanMasrifan1462200195TeaterController::class, 'cetakDataExcel'])->name('teater.api_cetak_excel');
});


// Route untuk halaman mahasiswa
Route::prefix('/mahasiswa')->group(function () {
    // Route API get data last NBI by prodi
    Route::get('/last-nbi/{prodiId}', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'getLastNbiByProdiId']);

    // Route API Handle form mahasiswa
    Route::get('/', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/tambah', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'formTambah'])->name('mahasiswa.tambah');
    Route::get('/ubah/{mhs_id}', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'formUbah'])->name('mahasiswa.ubah');

    // Route API CRUD
    Route::post('/api_tambah/', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'tambahData'])->name('mahasiswa.api_tambah');
    Route::post('/api_ubah/', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'ubahData'])->name('mahasiswa.api_ubah');
    Route::delete('/api_hapus/{mhs_id}', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'hapusData'])->name('mahasiswa.api_hapus');
    Route::get('/api_cetak_pdf', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'cetakDataPdf'])->name('mahasiswa.api_cetak_pdf');
    Route::get('/api_cetak_excel', [AbdulRohmanMasrifan1462200195MahasiswaController::class, 'cetakDataExcel'])->name('mahasiswa.api_cetak_excel');
});


