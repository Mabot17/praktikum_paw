<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbdulRohmanMasrifan1462200195TeaterModel;

class AbdulRohmanMasrifan1462200195TeaterController extends Controller
{
    public function index()
    {
        // Mengambil data teater dari database yang tidak terhapus
        $teater = AbdulRohmanMasrifan1462200195TeaterModel::all();

        // Mengirimkan data teater ke view
        return view('pages.teater.form_teater', compact('teater'));
    }
}
