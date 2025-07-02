<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilPencarianController extends Controller
{
    public function hasil_pencarian()
    {
        return view('hasil_pencarian');
    }
}
