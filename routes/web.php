<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbdulRohmanMasrifan1462200195HomeController;
use App\Http\Controllers\AbdulRohmanMasrifan1462200195TeaterController;


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

// Route untuk halaman dashboard admin
Route::get('home', [AbdulRohmanMasrifan1462200195HomeController::class, 'index'])->name('home');
Route::get('teater', [AbdulRohmanMasrifan1462200195TeaterController::class, 'index'])->name('teater');


