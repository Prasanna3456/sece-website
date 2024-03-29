<?php

namespace App\Http\Controllers;

use App\Enum\TeamStatusEnum;
use App\Http\Controllers\Api\RazorpayController;
use App\Models\Event;
use App\Models\Team;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


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
        return view('frontend.events', compact('events', 'event_type'));
    }
    public function non_technical_events()
    {
        $events = Event::where('category', 1)->get();
        $event_type = 'Non Technical';
        // dd($events);
        return view('frontend.events', compact('events', 'event_type'));
    }
    public function online_events()
    {
        $events = Event::where('category', 2)->get();
        $event_type = 'Online';
        return view('frontend.events', compact('events', 'event_type'));
    }
    public function show_event_details($slug)
    {
        $event = Event::where('slug', $slug)->first();

        // if($event->status != 0)
        // {
        //     return response('Event Registration has been closed');
        // } else {
            return view('frontend.show_event', compact('event'));
        // }
    }


    public function id_upload(Request $request)
    {
        if ($request->hasFile('college_id_card')) {
            $file = $request->file('college_id_card');
            $filename = time() . '.' . $request->college_id_card->extension();
            $file_path = $file->move(storage_path('app/public'), $filename);
            // dd($filename);
            return $filename;
        }

        return  '';
    }

    public function register_team(Request $request)
    {
        // dd($request->input('college_id_card'));

        $event_details = Event::where('id', $request->event_id)->first();
        $team = Team::where('event_id', $request->event_id)->where('email', $request->email)->orWhere('whatsapp_number', $request->whatsapp_number);

        // check whether the team exsits and if their status is registred means go to payment page
        if ($team->exists() && $team->first()->status == TeamStatusEnum::REGISTERED) {
            return redirect(route('payment', ['razorpay_order_id' => $team->first()->razorpay_order_id]));
        }
        // check whether the team exsits and if their is status is paid means go to duplicate entry page
        else if ($team->exists() && $team->first()->status == TeamStatusEnum::PAYMENT_SUCCESSFULL)
        {
            return redirect(route('duplicate_entry'));
            // return redirect(route('duplicate_entry'));
        }
        else {
            $new_team = $this->add_team_data_to_db($request);
            $razorpay_order = app(RazorpayController::class)->create_order($new_team, $event_details);
            return redirect(route('payment', ['razorpay_order_id' => $razorpay_order['order_id']]));
        }
    }

    public function payment($razorpay_order_id)
    {
        // dd($razorpay_order_id);

        if ($razorpay_order_id == null) {
            return redirect(route('index'));
        }
        $order = app(RazorpayController::class)->fetch_order($razorpay_order_id);

        // dd($order);
        // if ($order['status'] == "paid") {
        //     return redirect(route('register_error'));
        // }

        // dd($order    );
        return view('frontend.payment', compact('order'));
    }


    public function registration_successfull($razorpay_order_id)
    {
        // dd($razorpay_order_id);
        $team = Team::where('razorpay_order_id', $razorpay_order_id)->first();
        // dd($team)
        $event = Event::find($team->event_id);
        $team->update([
            'status' => '1'
        ]);

        // dd($team);

        return view('frontend.registration_successfull', compact('team','event'));
    }


    public function add_team_data_to_db($request)
    {
        $project_based_event = $request->project_based_event;
        $fifa_event = $request->fifa_event;
        $team = Team::create([
            'event_id' => $request->event_id,
            'team_id' => 'QN-' . random_int(10000, 99999),
            'name' => $request->name,
            'email' => $request->email,
            'institution_name' => $request->institution_name,
            'course' => $request->course,
            'department' => $request->department,
            'year_section' => $request->year_and_section,
            'whatsapp_number' => $request->whatsapp_number,
            'college_id_card' => $request->input('college_id_card'),
            'project_title' => $project_based_event ? $request->project_title : null,
            'project_abstract' => $project_based_event ? $request->project_abstract : NULL,
            'project_based_event' => $project_based_event ? 1 : 0,
            'fifa_event' =>  $request->fifa_event ? 1 : 0

        ]);

        if ($request->team_member_names != null) {

            for ($i = 0; $i < count($request->team_member_names); $i++) {
                if ($request->team_member_names[$i] != null) {
                    $team_member = TeamMember::create([
                        'team_id' => $team->id,
                        'name' => $request->team_member_names[$i],
                    ]);
                }
            }
        }

        return $team;
    }

    // new registration ✔
    // new registration but upi failed means stay in payement page ✔
    // registerd but not paid redirect to payment page ✔
    // duplicate entry with successfull payment redirect to already registered page ✔
}
