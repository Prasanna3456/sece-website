<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\RazorpayController;
use App\Models\Event;
use App\Models\Team;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

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


    public function id_upload(Request $request)
    {
        if($request->hasFile('college_id_card'))
        {
            $file = $request->file('college_id_card');
            $filename = time().$file->getClientOriginalName();
            $file_path = $file->storeAs('uploads',$filename);
            return $file_path;
        }

        return  '';
    }

    public function register_team(Request $request)
    {
        // foreach ($request->input() as $input => $value) {
        //     if ($input != '_token') {
        //        var_dump($input);
        //     }
        // }

        // dd($request->all());
        $event_details = Event::where('id',$request->event_id)->first();
        $team = Team::create([
            'event_id' => $request->event_id,
            'team_id' => 'QN-'.random_int(10000, 99999),
            'name' => $request->name,
            'email' => $request->email,
            'institution_name' => $request->institution_name,
            'course' => $request->course,
            'department' => $request->department,
            'year_section' => $request->year_and_section,
            'whatsapp_number' => $request->whatsapp_number,
            'college_id_card' => $request->college_id_card,
        ]);

        for($i = 0; $i < count($request->team_member_names); $i++) {
            $team_member = TeamMember::create([
                'team_id' => $team->team_id,
                'name' => $request->team_member_names[$i],
            ]);
        }

        $razorpay_order = app(RazorpayController::class)->create_order($team,$event_details);

        // dd($razorpay_order);
        // return view('frontend.payment',compact('razorpay_order','team'));
        return redirect(route('payment',['razorpay_order_id' => $razorpay_order['order_id']]));
    }

    public function payment($razorpay_order_id)
    {
        // dd($razorpay_order_id);

        if($razorpay_order_id == null)
        {
            return redirect(route('index'));
        }
        $order = app(RazorpayAPIController::class)->fetch_order($razorpay_order_id);

        if ($order['status'] == "paid"){
            return redirect()->route('index');
        }

        // dd($order    );
        return view('frontend.payment',compact('order'));
    }


    function registration_successfull()
    {
        // dd($request->all());
        // $team = Team::where('team_id',$request->team_id)->first();
        // $team->payment_status = 1;
        // $team->save();
        return view('frontend.registration_successfull');
    }
}
