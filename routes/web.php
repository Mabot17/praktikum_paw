<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbdulRohmanMasrifan_1462200195Controller;

Route::get('/', [AbdulRohmanMasrifan_1462200195Controller::class, 'main_page'])->name('main_page');
Route::get('/home', [AbdulRohmanMasrifan_1462200195Controller::class, 'home_page'])->name('home_page');
Route::get('/cartoon', [AbdulRohmanMasrifan_1462200195Controller::class, 'cartoon_page'])->name('cartoon_page');
Route::get('/about_me', [AbdulRohmanMasrifan_1462200195Controller::class, 'aboutme_page'])->name('aboutme_page');
