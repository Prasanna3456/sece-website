@extends('layouts.app')
{{-- duplicate entry --}}
@section('content')
    <div class="flex flex-col justify-center items-center h-screen width-80 bg-black">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl tracking-tight text-center text-[#FF003C] oswald-bold-800 uppercase">
            Registration failed </h1>
        <p class="text-gray-200 text-lg text-center max-w-3xl  mx-5 mt-6">
            Looks like the you have already registered for this event with this. Go back and try again with different data or register for another event</p>
            <button onclick="history.back()"
                    class=" px-8 py-3 mt-6 oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Go Back</button>
    </div>
@endsection
