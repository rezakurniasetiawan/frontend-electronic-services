<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingpageController extends Controller
{
    public function landingpage()
    {
        $carousel = \App\Models\carousel::all();
        $about = \App\Models\about::first();
        $services = \App\Models\service::all();
        $testimonials = \App\Models\testimoni::all();
        return view('landingpage.index', compact('carousel', 'about', 'services', 'testimonials'));
    }
}
