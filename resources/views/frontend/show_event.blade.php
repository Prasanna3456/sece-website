@extends('layouts.app')
@section('js')
    <script>
        function rulesDivFunction() {
            var x = document.getElementById("rulesDiv").querySelectorAll("ol");
            if(x)
            {
                console.log('found')
                x[0].classList.add("list-disc");
            } else {
                console.log('not found')
            }
        }
        rulesDivFunction();
    </script>
@endsection
@section('css')
    <style>
        .register_text {
            margin-top: 10px;
            /* font-family: "Cabin", sans-serif; */
            letter-spacing: 12px;
            text-indent: 12px;
            color: #ffffff;
            -webkit-animation: colorText 5s ease-out infinite, nudgeText 5s ease-out infinite;
            animation: colorText 5s ease-out infinite, nudgeText 5s ease-out infinite;
        }

        .mouse {
            background: #4e5559 linear-gradient(transparent 0%, transparent 50%, #ffffff 50%, #ffffff 100%);
            position: relative;
            width: 40px;
            height: 60px;
            border-radius: 100px;
            background-size: 100% 200%;
            -webkit-animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
            animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
        }

        .mouse:before,
        .mouse:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
        }

        .mouse:before {
            width: 30px;
            height: 50px;
            background-color: #FF003C;
            border-radius: 100px;
        }

        .mouse:after {
            background-color: #ffffff;
            width: 8px;
            height: 8px;
            border-radius: 100%;
            -webkit-animation: trackBallSlide 5s linear infinite;
            animation: trackBallSlide 5s linear infinite;
        }

        @-webkit-keyframes colorSlide {
            0% {
                background-position: 0% 100%;
            }

            20% {
                background-position: 0% 0%;
            }

            21% {
                background-color: #4e5559;
            }

            29.99% {
                background-color: #ffffff;
                background-position: 0% 0%;
            }

            30% {
                background-color: #4e5559;
                background-position: 0% 100%;
            }

            50% {
                background-position: 0% 0%;
            }

            51% {
                background-color: #4e5559;
            }

            59% {
                background-color: #ffffff;
                background-position: 0% 0%;
            }

            60% {
                background-color: #4e5559;
                background-position: 0% 100%;
            }

            80% {
                background-position: 0% 0%;
            }

            81% {
                background-color: #4e5559;
            }

            90%,
            100% {
                background-color: #ffffff;
            }
        }

        @keyframes colorSlide {
            0% {
                background-position: 0% 100%;
            }

            20% {
                background-position: 0% 0%;
            }

            21% {
                background-color: #4e5559;
            }

            29.99% {
                background-color: #ffffff;
                background-position: 0% 0%;
            }

            30% {
                background-color: #4e5559;
                background-position: 0% 100%;
            }

            50% {
                background-position: 0% 0%;
            }

            51% {
                background-color: #4e5559;
            }

            59% {
                background-color: #ffffff;
                background-position: 0% 0%;
            }

            60% {
                background-color: #4e5559;
                background-position: 0% 100%;
            }

            80% {
                background-position: 0% 0%;
            }

            81% {
                background-color: #4e5559;
            }

            90%,
            100% {
                background-color: #ffffff;
            }
        }

        @-webkit-keyframes trackBallSlide {
            0% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            6% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            14% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            15%,
            19% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            28%,
            29.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            30% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            36% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            44% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            45%,
            49% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            58%,
            59.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            60% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            66% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            74% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            75%,
            79% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            88%,
            100% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
        }

        @keyframes trackBallSlide {
            0% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            6% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            14% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            15%,
            19% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            28%,
            29.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            30% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            36% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            44% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            45%,
            49% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            58%,
            59.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            60% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            66% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            74% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            75%,
            79% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            88%,
            100% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
        }

        @-webkit-keyframes nudgeMouse {
            0% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(8px);
            }

            30% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(8px);
            }

            60% {
                transform: translateY(0);
            }

            80% {
                transform: translateY(8px);
            }

            90% {
                transform: translateY(0);
            }
        }

        @keyframes nudgeMouse {
            0% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(8px);
            }

            30% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(8px);
            }

            60% {
                transform: translateY(0);
            }

            80% {
                transform: translateY(8px);
            }

            90% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes nudgeText {
            0% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(2px);
            }

            30% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(2px);
            }

            60% {
                transform: translateY(0);
            }

            80% {
                transform: translateY(2px);
            }

            90% {
                transform: translateY(0);
            }
        }

        @keyframes nudgeText {
            0% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(2px);
            }

            30% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(2px);
            }

            60% {
                transform: translateY(0);
            }

            80% {
                transform: translateY(2px);
            }

            90% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes colorText {
            21% {
                color: #4e5559;
            }

            30% {
                color: #ffffff;
            }

            51% {
                color: #4e5559;
            }

            60% {
                color: #ffffff;
            }

            81% {
                color: #4e5559;
            }

            90% {
                color: #ffffff;
            }
        }

        @keyframes colorText {
            21% {
                color: #4e5559;
            }

            30% {
                color: #ffffff;
            }

            51% {
                color: #4e5559;
            }

            60% {
                color: #ffffff;
            }

            81% {
                color: #4e5559;
            }

            90% {
                color: #ffffff;
            }
        }
    </style>
@endsection
@section('content')
    <section class="text-gray-900 bg-[#121212] py-20 body-font bg-cover z-30"
        style="background-image: url('{{ asset('assets/img/bg-2.jpg') }}') ">
        <div class="container mx-auto px-16 my-5  flex flex-col md:flex-row">
            <div class="flex-none mx-auto">
                <img src="{{ asset('assets/img/sample-poster.jpg') }}" alt="poster" class="w-64 lg:w-96">
            </div>

            <div class="md:ml-24 bg-black bg-opacity-60 h-96 mt-5 lg:mt-0 md:mt-0 " x-data="{ opentab: 1 }">
                <ul
                    class="flex flex-wrap text-xl uppercase  oswald-bold-500 tracking-wide font-medium text-center text-gray-500 border-b border-gray-200">
                    <li class="mr-2 flex-auto">
                        <a :class="{ 'text-[#FF003C]': opentab === 1 }" @click="opentab = 1" aria-current="page"
                            class="inline-block p-4 cursor-pointer rounded-t-lg active">Description</a>
                    </li>
                    <li class="mr-2 flex-auto">
                        <a @click="opentab = 2" class="inline-block p-4  cursor-pointer hover:text-[#FF003c]"
                            :class="{ 'text-[#FF003C]': opentab === 2 }">Rules</a>
                    </li>
                    <li class="mr-2 flex-auto">
                        <a @click="opentab = 3" class="inline-block p-4 cursor-pointer  hover:text-[#FF003c]"
                            :class="{ 'text-[#FF003C]': opentab === 3 }">Contact</a>
                    </li>
                </ul>

                <div class="my-5 h-80 mx-5 text-white">
                    <div class="w-full" x-show="opentab === 1">
                        {!! $event->description !!}
                    </div>
                    <div class="text-gray-200 text-base w-full p-2" id="rulesDiv" x-show="opentab === 2">
                        {!! $event->rules !!}
                    </div>
                    <div class="text-gray-200 text-base w-full" x-show="opentab === 3">
                        {!! $event->contact !!}
                    </div>

                </div>
                <div>
                    {{-- <a href="#register_section"
                        class=" px-8 py-3 mx-3  oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Register</a> --}}
                </div>


            </div>

        </div>
        <div class="mouse flex justify-center mx-auto  lg:-mt-10"></div>
        <p class="register_text flex justify-center mx-auto">Scroll</p>
    </section>

    {{-- Register section --}}
    <section class="text-gray-900  body-font py-10"
        style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') " id="register_section">
        {{-- <div class="overlay"></div> --}}
        {{-- <h1 class="sm:text-5xl text-5xl text-[#FF003C] lg:text-[110px]  px-5 py-5 lg:py-0   oswald-bold-800 uppercase">
            Register</h1> --}}

        <div class="max-w-4xl mx-5 md:mx-auto lg:mx-auto  border-2 border-[#C7002F] my-16">
            <h2
                class="text-3xl font-semibold  text-center text-[#111] uppercase bg-[#FF003C] h-16 flex items-center justify-center orbitron">
                Register</h2>

            <form class="p-6">
                <h2 class="text-2xl text-[#C7002F] orbitron tracking-wide">
                    ID card is mandatory</h2>
                <div class="border-b-2 border-gray-200 my-6">
                    <div class="grid grid-cols-1 gap-6 mt-3 sm:grid-cols-2  orbitron uppercase">
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="username">Name</label>
                            <input id="username" type="text" autocomplete="nickname"
                                class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                        </div>
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Email</label>
                            <input id="email" type="email"
                                class="block w-full px-4 py-2 mt-2 text-white bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                        </div>
                    </div>

                    <div class="my-2 orbitron uppercase">
                        <label class="text-white font-semibold tracking-widest text-lg " for="username">Institution
                            name</label>
                        <input id="username" type="text"
                            class="block w-full px-4 py-2 mt-2 text-white bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>

                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3  orbitron uppercase">
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="username">Course</label>
                            <input id="username" type="text" autocomplete="nickname"
                                class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                        </div>
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Department </label>
                            <input id="email" type="email"
                                class="text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                        </div>
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Year &
                                Section</label>
                            <input id="email" type="email"
                                class="block w-full px-4 py-2 mt-2 text-white bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2  orbitron uppercase mb-3">
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="username">Phone number
                            </label>
                            <input id="username" type="text" autocomplete="nickname"
                                class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                        </div>
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Whatsapp
                                number</label>
                            <input id="email" type="email"
                                class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                        </div>
                    </div>
                </div>





                @if($event->max_team_members > 0)
                <div class="orbitron uppercase">
                    <h2 class="text-white font-semibold tracking-wide text-lg" for="username">Team Members Details </h2>
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2  ">
                        @for ($i = 0; $i < $event->max_team_members; $i++)
                            <div class="my-2">
                                <label class="text-white font-semibold tracking-wide text-lg" for="username">Team Member
                                    {{ $i }} </label>
                                <input id="username" type="text" autocomplete="nickname"
                                    class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                            </div>
                        @endfor
                    </div>
                </div>
                @endif

                <div class="flex justify-end mt-6">
                    <a href="#register_section"
                        class=" px-8 py-3 oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Submit</a>
                </div>
            </form>
        </div>
    </section>

    <div
        class="z-50 inset-x-0 bottom-0 sticky flex justify-center bg-gradient-to-t from-black  pb-8 pointer-events-none dark:from-slate-900 absolute">
    </div>
@endsection
