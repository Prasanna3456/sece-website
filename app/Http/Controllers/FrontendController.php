<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about_us()
    {
        return view('frontend.about_us');
    }

    public function events()
    {
        return view('frontend.events');
    }
    public function show_event_details()
    {
        return view('frontend.show_event');
    }
}
