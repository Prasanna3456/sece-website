@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center items-center h-screen width-80 bg-black">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl tracking-tight text-center text-[#FF003C] oswald-bold-800 uppercase">
            Registered Successfully </h1>
        <p class="text-gray-200 text-lg text-center max-w-3xl  mx-5 mt-6">
            You have successfully registered for the <strong class="text-[#FF003C]">Electrphile</strong> event.Your Team ID
            <strong class="text-[#FF003C]">QN-12345</strong>.
           We have sent you an email with your team ID and other information,  Please call the below mobile number if you haven't received an email from us.
        </p>
        {{-- <p class="text-white text-lg mt-6">Want to register for other events ? </p> --}}
        <a href="{{ route('index') }}"
            class=" px-8 py-3 mt-6 oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Home</a>
    </div>
@endsection
