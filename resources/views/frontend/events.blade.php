@extends('layouts.app')

@section('content')
{{-- Events section --}}
<section class="text-gray-900 bg-[#c252e1] body-font py-8" style="background-image: url('{{ asset('assets/img/bg_elements_2.png') }}') ">
    <h1 class="sm:text-5xl md:text-6xl text-7xl text-black lg:text-[110px] text-[#FF003C] px-5 py-5 lg:py-0 oswald-bold-800 uppercase text-center">Events</h1>
    <h1 class="sm:text-5xl text-5xl  lg:text-5xl tracking-wide text-white px-5 py-5 lg:py-0 oswald-bold-800 uppercase text-center">Technical Events</h1>

    <div class="container mx-auto flex px-5 py-12 space-y-4 flex-col items-center justify-center">
 
        <div class="w-full max-w-4xl flex flex-col sm:flex-row gap-3 sm:items-center  justify-between px-5 py-12 bg-cover bg-center bg-[#FF003C]">
            <div>
            <!-- <span class="text-purple-800 text-sm">Engineering</span> -->
                <h3 class="font-semibold  text-4xl mt-px text-white">Senior Full Stack Backend Engineer</h3>
                <h3 class="font-bold text-xl mt-px text-white">Senior Full Stack Backend Engineer</h3>
            </div>
            <div>
                <button class="bg-purple-900 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">Apply Now <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full max-w-4xl flex flex-col sm:flex-row gap-3 sm:items-center  justify-between px-5 py-12 bg-cover bg-center bg-[#FF003C]">
            <div>
            <!-- <span class="text-purple-800 text-sm">Engineering</span> -->
                <h3 class="font-semibold  text-4xl mt-px text-white">Senior Full Stack Backend Engineer</h3>
                <h3 class="font-bold text-xl mt-px text-white">Senior Full Stack Backend Engineer</h3>
            </div>
            <div>
                <button class="bg-purple-900 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">Apply Now <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                    </svg>
                </button>
            </div>
        </div>

    </div>


 
 </div>     
    </div>

</section>
@endsection