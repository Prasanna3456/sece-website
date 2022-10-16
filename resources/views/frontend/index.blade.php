@extends('layouts.app')
@section('css')
    <style>
        .glitch {
            width: 100vw;
            /* height: 100vh; */
            max-width: 100%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow: hidden;

            /* margin-top: -100px; */
        }

        .glitch .glitch__item {
            background: url("https://www.cyberpunk.net/build/images/home3/screen-image-mercenary-e79283ec.jpg") no-repeat 50% 50%/cover;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
        }

        .glitch .glitch__title:before,
        .glitch .glitch__title:after {
            content: "Quintessence";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            /* height: 100%; */
            overflow: hidden;
        }

        .glitch .glitch__title:before {
            left: 2px;
            text-shadow: -1px 0 #00ffea;
            clip: rect(24px, 550px, 90px, 0);
            animation: glitch-anim 2s linear infinite alternate-reverse;
        }

        .glitch .glitch__title:after {
            left: -2px;
            text-shadow: -1px 0 #fe3a7f;
            clip: rect(85px, 550px, 140px, 0);
            animation: glitch-anim 2s 1s linear infinite alternate-reverse;
        }

        .glitch .glitch__title {
            position: relative;
            /* margin-top: -100px; */
            text-transform: uppercase;

        }
    </style>
@endsection
@section('js')
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Nov 12, 2022 08:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection
@section('content')
    {{-- <section>
        <div id="cyberSlider" class="cyber-slider z-30 -mt-20">
            <ul class="cyber-slider__wrapper">

                <li data-slideid="1" class="cyber-slider__slide active">
                    <span class="cyber-slider__imgwrap">
                        <img class="slide-image" src="{{ asset('assets/img/slides/slide-1.jpg') }}" alt="Slide 1">
                        <span class="glitch-area"></span>
                    </span>

                    <div class="cyber-slider__content">
                        <!-- class glitching -->
                        <div class="cyber-slider__slidetext">
                            <h3 class="heading-lg">LIVE IN THE CITY OF THE FUTURE</h3>
                            <p>Enter the massive open world of Night City, a place that sets new standards in terms of
                                visuals, complexity and depth.</p>
                        </div>
                    </div>
                </li>

                <li data-slideid="2" class="cyber-slider__slide">
                    <span class="cyber-slider__imgwrap">
                        <img class="slide-image" src="{{ asset('assets/img/slides/slide-2.jpg') }}" alt="Slide 2">
                        <span class="glitch-area"></span>
                    </span>

                    <div class="cyber-slider__content">
                        <!-- class glitching -->
                        <div class="cyber-slider__slidetext">
                            <h3 class="heading-lg">Slide 2</h3>
                            <p>Enter the massive open world of Night City, a place that sets new standards in terms of
                                visuals, complexity and depth.</p>
                        </div>
                    </div>
                </li>

                <li data-slideid="3" class="cyber-slider__slide">
                    <span class="cyber-slider__imgwrap">
                        <img class="slide-image" src="{{ asset('assets/img/slides/slide-3.jpg') }}" alt="Slide 3">
                        <span class="glitch-area"></span>
                    </span>

                    <div class="cyber-slider__content">
                        <!-- class glitching -->
                        <div class="cyber-slider__slidetext">
                            <h3 class="heading-lg">Slide 3</h3>
                            <p>Enter the massive open world of Night City, a place that sets new standards in terms of
                                visuals, complexity and depth.</p>
                        </div>
                    </div>
                </li>

            </ul>
            <ul class="cyber-slider__controls">
                <li data-slide="1" class="current"><a href="#"><span class="sr-only">Slide 1</span></a></li>
                <li data-slide="2" class=""><a href="#"><span class="sr-only">Slide 2</span></a></li>
                <li data-slide="3" class=""><a href="#"><span class="sr-only">Slide 3</span></a></li>
            </ul>
        </div>
    </section> --}}

    <section class="h-screen">
        <div class="glitch h-screen">
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <h1
                class="glitch__title sm:text-5xl mt-20 md:text-8xl text-5xl mx-5 lg:text-[110px] text-[#FF003C] pb-5  lg:py-0 md:py-0 oswald-bold-800 uppercase text-center">
                Quintessence</h1>
            <img src="{{ asset('assets/img/sliver-logo.png') }}" class="z-40  mx-auto w-44 lg:w-80 sm:w-52 pb-10" alt="">
            <p id="demo" class="z-40 text-white orbitron font-bold sm:text-5xl md:text-6xl text-3xl lg:text-4xl  md:py-0 my-0 text-center uppercase "></p>

        </div>

    </section>

    {{-- About us section --}}
    <section class="text-gray-900 bg-[#3A0067] body-font py-5"
        style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') ">
        {{-- <div class="overlay"></div> --}}
        <h1 class="sm:text-5xl text-5xl text-white lg:text-[110px]  px-5 py-5 lg:py-0   oswald-bold-800 uppercase">ABOUT US
        </h1>
        <div class="container mx-auto flex px-5 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1
                    class=" w-full title-font sm:text-4xl text-3xl text-white lg:text-4xl mb-4 font-medium h1 glitched cyberpunk orbitron uppercase">
                    Quintessence 2k22
                </h1>
                <p class="mb-8 leading-relaxed text-gray-200">Copper mug try-hard pitchfork pour-over freegan heirloom
                    neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot
                    chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                    <button
                        class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Button</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            </div>
        </div>
    </section>
    {{-- Events section --}}
    {{-- <sectionclass="text-gray-900bg-blackbody-fontpy-5"style="background-image:url('asset('assets/img/bg_elements_2.png')') ">
    <h1 class="sm:text-5xl text-5xl text-black lg:text-[110px] text-[#FF003C] px-5 py-5 lg:py-0   oswald-bold-800 uppercase">Events</h1>

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
        <!--  -->

    </div>



 </div>
    </div>

</section>  --}}
@endsection
