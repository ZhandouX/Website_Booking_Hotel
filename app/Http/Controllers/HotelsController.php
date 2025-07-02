<?php

namespace App\Http\Controllers;

use App\Models\Hotel;

class HotelsController extends Controller
{
    public function show($name)
    {
        $hotel = hotel::where('name', $name)->firstOrFail();
        return view('property', compact('hotel'));
    }
}
