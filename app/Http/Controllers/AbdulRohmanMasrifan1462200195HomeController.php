<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbdulRohmanMasrifan1462200195HomeModel;

class AbdulRohmanMasrifan1462200195HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data mahasiswa dari database dengan paginasi
        $mahasiswa = AbdulRohmanMasrifan1462200195HomeModel::all();

        // Mengembalikan view 'index' dengan data mahasiswa
        return view('pages.mahasiswa.main_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
