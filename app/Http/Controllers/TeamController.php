<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        return view('about_us.team');
    }
}
