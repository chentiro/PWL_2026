<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang’';
    }

    public function about()
    {
        return 'NIM: 254107023001 <br> Nama: Silva Tria Alfares';
    }

    public function articles($articlesId)
    {
        return "Halaman Artikel dengan ID {$articlesId}";
    }
}
