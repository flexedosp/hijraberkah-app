<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Guests extends Controller
{
    //
    public function home()
    {
        return view('home', ['titlePage' => 'Beranda']);
    }

    public function detail()
    {
        return view('detailproduk', ['titlePage' => 'Detail Produk']);
    }
}
