<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Team;
use Exception;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $razorpay_public_key = config('app.razorpay_public_key');
        $razorpay_private_key = config('app.razorpay_secret_key');

        if ($razorpay_private_key == null || $razorpay_public_key == null) {
            throw new Exception('API key Error: The Razorpay API keys have not been properly configured in the application settings.');
        }

        $this->key_id = $razorpay_public_key;
        $this->secret =  $razorpay_private_key;
    }

    /**
     * create_order
     *
     * @param  mixed $request
     * @return void
     */
    public function create_order($team, $event_details)
    {
        $response = array();
        $amount = ($event_details->entry_fee) * 100;
        $receipt_id = now()->format('d-m-Y') . '-' . rand(10000, 99999);
        $event = Event::find($team->event_id);
        $notes = [
            'team_id' => $team->team_id,
            'register_event' => $event->creative_name,
            'name' => $team->name,
            'email' => $team->email,
        ];


        $razorpay_notes = collect($notes)->toArray();

        try {
            $api = new Api($this->key_id, $this->secret);

            $order = $api->order->create(
                array(
                    // 'receipt_id' => $receipt_id,
                    'amount' => $amount,
                    'currency' => 'INR',
                    'notes'=> $razorpay_notes,
                    'payment' => array(
                        'capture' => 'automatic',
                        'capture_options' => array(
                            'automatic_expiry_period' => 12,
                            'manual_expiry_period' => 7200,
                            'refund_speed' => 'optimum'
                        )
                    ),
                )
            );

            $team_update = Team::find($team->id);

            $team_update->update([
                'razorpay_order_id' => $order->id,
            ]);
      
            $response['code'] = 200;
            $response['order_id'] = $order->id;
            $response['amount'] = $order->amount;
            $response['message'] = 'Razorpay order created successfully';
            $response['team'] = $team_update;
        } catch (Exception $e) {
            $response['code'] = $e->getCode();
            $response['message'] = $e->getMessage();
        }


        return $response;
    }


    /**
     * fetch_order
     *
     * @param  mixed $order_id
     * @return void
     */
    public function fetch_order($order_id) {
        $api = new Api($this->key_id, $this->secret);
        $order = $api->order->fetch($order_id);
        return $order;
    }

    /**
     * fetch_payment
     *
     * @param  mixed $payment_id
     * @return void
     */
    public function fetch_payment($payment_id) {
        $api = new Api($this->key_id, $this->secret);
        $payment = $api->payment->fetch($payment_id);
        return $payment;
    }

}
