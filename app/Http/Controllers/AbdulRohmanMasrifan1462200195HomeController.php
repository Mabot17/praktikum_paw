<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbdulRohmanMasrifan1462200195HomeModel;

class AbdulRohmanMasrifan1462200195HomeController extends Controller
{
    public function index()
    {
        // Mengembalikan view 'index' dengan data mahasiswa
        return view('pages.home.main_home');
    }
}
