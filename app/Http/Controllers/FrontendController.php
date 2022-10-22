<?php

namespace App\Http\Controllers;

use App\Models\Event;
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

    public function technical_events()
    {
        $events = Event::where('category', 0)->get();
        // dd($events);
        $event_type = 'Technical';
        return view('frontend.events',compact('events','event_type'));
    }
    public function non_technical_events()
    {
        $events = Event::where('category', 1)->get();
        $event_type = 'Non Technical';
        // dd($events);
        return view('frontend.events',compact('events','event_type'));
    }
    public function online_events()
    {
        $events = Event::where('category', 2)->get();
        $event_type = 'Online';
        return view('frontend.events',compact('events','event_type'));
    }
    public function show_event_details($slug)
    {
        $event = Event::where('slug',$slug)->first();
        // dd($event);
        return view('frontend.show_event',compact('event'));
    }
}
