<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function events()
    {
        return view('frontend.events');
    }
    public function show_event_details()
    {
        return view('frontend.show-event');
    }
}
