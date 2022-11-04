@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center items-center h-screen width-80 bg-black">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl tracking-tight text-center text-[#FF003C] oswald-bold-800 uppercase">
                        Payment failed </h1>
        <p class="text-gray-200 text-lg text-center max-w-3xl  mx-5 mt-6">Looks like you have closed the payment page, please go back and register again</p> </h1>
        
           <a href="javascript:history.back()"
            class=" px-8 py-3 mt-6 oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Go back</a>
    </div>
    
@endsection
