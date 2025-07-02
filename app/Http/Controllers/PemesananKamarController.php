<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesananKamarController extends Controller
{
    public function pemesanan_kamar()
    {
        return view('pemesanan_kamar');
    }
}
