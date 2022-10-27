@extends('layouts.app')

@section('js')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "{{ config('settings.razorpay_public_key') }}",
            "amount": "{{ $order->amount }}",
            "currency": "INR",
            "name": "{{ config('setting.app_name') }}",
            "image": "",
            "order_id": "{{ $order->id }}",
            "handler": function(response) {

                // alert(response.razorpay_payment_id);
                // alert(response.razorpay_order_id);
                // alert(response.razorpay_signature)
                window.location.href = '{{ route("registration_successfull") }}' + '/' + response.razorpay_payment_id
            },
            "notes": {
                'team_id': '{{ $order->notes->team_id }}',
                'name': '{{ $order->notes->name }}',
                'email': '{{ $order->notes->email }}',
                'registered_event': '{{ $order->notes->register_event }}',
            },
            "prefill": {
                "name": "{{ $order->notes->name }}",
                "email": "{{ $order->notes->email }}",
            },
            "theme": {
                "color": "#3399cc"
            }
        };

        var razorpay_instance = new Razorpay(options);

        razorpay_instance.on('payment.failed', function(response) {
            alert('Check console for payment error');
            console.log(response.error.code);
        });

        // TODO Capture other events too, lke INVALID PAYMENT etc.

        razorpay_instance.open();
    </script>
@endsection

@section('content')
        <div class="flex justify-start items-center h-screen bg-gray-800">
            <h1 class="text-xl text-white inline-flex text-center">
                <svg class="animate-spin -ml-1 mr-3 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                    </circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg> Processing, don't close this page
            </h1>
        </div>
        </div>
@endsection
