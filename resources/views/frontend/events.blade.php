@extends('layouts.app')
@section('css')
    <style>
        .glitch {
            width: 100vw;
            height: 100vh;
            margin-bottom: -100px;
            max-width: 100%;
            /* position: relative; */
            display: flex;
            justify-content: center;
            align-items: center;
            /* overflow: hidden; */
            /* margin-top: -100px; */
        }

        .glitch .glitch__item {
            background: url("{{ asset('assets/img/bg-1.jpg') }}") no-repeat 50% 50%/cover;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
        }
    </style>
@endsection
@section('content')
    {{-- Events section --}}
    {{-- <section class="text-gray-900  body-font py-8 bg-cover z-30 -mt-20"
        style="background-image: url('{{ asset('assets/img/bg-1.jpg') }}') ">
        <div class="py-16">
            <h1
                class="sm:text-5xl md:text-6xl text-7xl text-black lg:text-[110px] text-[#FF003C] px-5 py-5 lg:py-0 oswald-bold-800 uppercase text-center">
                Events</h1>
            <h1
                class="sm:text-5xl text-5xl  lg:text-5xl tracking-wide text-white px-5 py-5 lg:py-0 oswald-bold-800 uppercase text-center">
                Technical Events</h1>
        </div>
        </div>
        </div>

    </section> --}}

    <section>
        <div class="glitch">
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
            <div class="flex flex-col py-16">
                <h1
                    class="glitch__title sm:text-5xl md:text-6xl text-7xl text-black lg:text-[110px] text-[#FF003C] px-5 py-5 lg:py-0 md:py-0 oswald-bold-800 uppercase text-center">
                    Events</h1>
                <h1
                    class="z-40 sm:text-5xl text-5xl  lg:text-5xl tracking-wide text-white px-5 py-5 lg:py-0 oswald-bold-800 uppercase text-center">
                    Non Technical Events</h1>
            </div>
        </div>
        {{-- <div
            class="container -mt-56 lg:-mt-72 md:-mt-56 mx-auto flex px-5 pb-5 space-y-4 flex-col  justify-center orbitron">


                <div class=" w-full max-w-4xl flex flex-col  sm:flex-row gap-3 sm:items-center  justify-between px-5 py-12 bg-cover bg-center">

                    <div>
                        <!-- <span class="text-purple-800 text-sm">Engineering</span> -->
                        <h3 class="font-semibold  text-3xl md:text-4xl lg:text-5xl  mt-px text-white">ELECTRAPHILE</h3>
                        <h3 class="font-bold text-xl mt-px text-white">Quiz</h3>
                    </div>
                    <div>
                        <button class="bg-[#FF003C] text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">Apply
                            Now <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                            </svg>
                        </button>
                    </div>
                </div>

        </div> --}}
    </section>
    <div class="-mt-56 lg:-mt-72 md:-mt-56 flex px-5 pb-5 space-y-4 flex flex-col items-center justify-center orbitron">
        @for ($i = 0; $i < 7; $i++)
        <div class="w-full max-w-6xl py-20 overflow-hidden relative">
            <img class="absolute inset-0 h-full w-full object-cover"
                src="{{ asset('assets/img/sample-poster.jpg') }}" alt="">
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            <div class="flex flex-col lg:flex-row gap-3 lg:items-center mx-5 justify-between relative">
                <div>
                    <!-- <span class="text-purple-800 text-sm">Engineering</span> -->
                    <h3 class="font-semibold  text-3xl md:text-4xl lg:text-5xl  mt-px text-white">ELECTRAPHILE</h3>
                    <h3 class="font-bold text-xl mt-px text-white">Quiz</h3>
                </div>
                <div>
                    <button class="bg-[#FF003C] text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">Register Now<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        @endfor

    </div>
    <div
        class="z-50 inset-x-0 bottom-0 sticky flex justify-center bg-gradient-to-t from-black pt-32 pb-8 pointer-events-none dark:from-slate-900 absolute">
    </div>
@endsection
