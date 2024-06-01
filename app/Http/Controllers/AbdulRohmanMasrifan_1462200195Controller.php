<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbdulRohmanMasrifan_1462200195Controller extends Controller
{
    public function main_page(){
        return view('main_page');
    }

    public function home_page(){
        return view('pages.home_page');
    }

    public function cartoon_page(){
        return view('pages.cartoon_page');
    }

    public function aboutme_page(){
        return view('pages.aboutme_page');
    }
}
