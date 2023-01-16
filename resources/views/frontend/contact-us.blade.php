@extends('layouts.app')

@section('content')
    <header
        class="lg:text-[110px] bg-[#FF003C] bg-opacity-75 oswald-bold-800 uppercase text-center  px-4 sm:px-6 lg:px-16 py-20">
        <div class="max-w-10xl mx-auto divide-y divide-black divide-opacity-10">
            <div class="sm:pt-4 pb-10 sm:pb-14 flex flex-wrap items-center">
                <div class="w-full flex-none text-center xl:w-auto xl:flex-auto xl:text-left mt-10">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold tracking-tight text-white">
                        Contact Us
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container px-5 py-24 mx-auto">
        <div class="w-1/3 mx-auto text-left py-24">
            <p class="leading-relaxed text-gray-400 py-20">

                Last updated on Jan 15th 2023
                <br>
                You may contact us using the information below:
                <br>
                <span> <strong>Entity name:</strong> Quintessence </span>
                <br>
                <span> <strong>Phone number:</strong>9087724500</span>
                <br>
                <strong>E-Mail ID:</strong> <a href="mailto:quintessence.ece@gmail.com">quintessence.ece@gmail.com</a>
                <br>
                <span> <strong>Address:</strong> 162, Bharathi Salai, Ramapuram, Chennai, Tamil Nadu 600089 </span>
                <br>
                
            </p>
        </div>
    </div>
@endsection
