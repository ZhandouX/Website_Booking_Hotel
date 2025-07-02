<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonial()
    {
        return view('about_us.testimonial');
    }
}
