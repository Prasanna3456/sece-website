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

    <section>
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
            <img src="{{ asset('assets/img/sliver-logo.png') }}" class="z-40  mx-auto w-44 lg:w-80 sm:w-52 pb-10"
                alt="">
            <p id="demo"
                class="z-40 text-white orbitron font-bold sm:text-5xl md:text-6xl text-3xl lg:text-4xl  md:py-0 my-0 text-center uppercase ">
            </p>

            <div class="mouse flex justify-center mx-auto mt-2"></div>
            <p class="register_text flex justify-center mx-auto">Scroll</p>
        </div>
    </section>

    {{-- Events CTA us section --}}
    {{-- <section class="text-gray-900 bg-[#3A0067] body-font py-5"
        style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') ">
        <div class="overlay"></div>
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
    </section> --}}
    <section style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') ">

        <h1 class="sm:text-5xl text-7xl text-[#FF003C] lg:text-[110px]  px-5 py-5 lg:py-0  oswald-bold-800 uppercase">Events
        </h1>
        <div class="relative mx-auto max-w-7xl">
            <div class="grid container gap-6 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none">
                <div class="flex  duration-100 hover:scale-105 flex-col mb-12 overflow-hidden cursor-pointer bg-[#FF003C] py-4 px-2"
                    style=" clip-path: polygon(0px 25px, 26px 0px, calc(60% - 25px) 0px, 60% 25px, 100% 25px, 100% calc(100% - 10px), calc(100% - 15px) calc(100% - 10px), calc(80% - 10px)  calc(100% - 10px), calc(80% - 15px) calc(100% - 0px), 10px  calc(100% - 0px), 0% calc(100% - 10px));">
                    <a href="/blog-post">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="https://cdn.mos.cms.futurecdn.net/UcXeK6DWKBWdc3Ao4TZ9nU.jpg" alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <a href="/blog-post"></a>
                        <div class="flex-1 px-1">
                            <a href="#" class="block mt-2 space-y-6">
                                <h3 class="text-2xl mb-0 font-semibold uppercase  tracking-wide text-white oswald-bold-500">
                                    Technical Events</h3>
                                <span class="text-lg font-normal text-white mt-0">Filling text so you can see how it looks
                                    like
                                    with text. Did I said text?</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex duration-100 hover:scale-105 flex-col mb-12 overflow-hidden cursor-pointer bg-[#FF003C] py-4 px-2""
                    style=" clip-path: polygon(0px 25px, 26px 0px, calc(60% - 25px) 0px, 60% 25px, 100% 25px, 100% calc(100% - 10px), calc(100% - 15px) calc(100% - 10px), calc(80% - 10px)  calc(100% - 10px), calc(80% - 15px) calc(100% - 0px), 10px  calc(100% - 0px), 0% calc(100% - 10px));">
                    <a href="/blog-post">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="https://cdn.vox-cdn.com/thumbor/MNz6SMRdP43YGJdsUvW-rBflRd8=/0x0:3840x2160/1400x1050/filters:focal(1920x1080:1921x1081)/cdn.vox-cdn.com/uploads/chorus_asset/file/20053035/Cyberpunk_2077_screen_10.jpg"
                                alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <a href="/blog-post"></a>
                        <div class="flex-1 px-1">
                            <a href="#" class="block mt-2 space-y-6">
                                <h3 class="text-2xl mb-0 font-semibold uppercase  tracking-wide text-white oswald-bold-500">
                                    Non Technical Events</h3>
                                <span class="text-lg font-normal text-white mt-0">Filling text so you can see how it looks
                                    like
                                    with text. Did I said text?</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex duration-100 hover:scale-105 flex-col mb-12 overflow-hidden cursor-pointer bg-[#FF003C] py-4 px-2""
                    style=" clip-path: polygon(0px 25px, 26px 0px, calc(60% - 25px) 0px, 60% 25px, 100% 25px, 100% calc(100% - 10px), calc(100% - 15px) calc(100% - 10px), calc(80% - 10px)  calc(100% - 10px), calc(80% - 15px) calc(100% - 0px), 10px  calc(100% - 0px), 0% calc(100% - 10px));">
                    <a href="/blog-post">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="https://cdn.mos.cms.futurecdn.net/UcXeK6DWKBWdc3Ao4TZ9nU.jpg" alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <a href="/blog-post"></a>
                        <div class="flex-1 px-1">
                            <a href="#" class="block mt-2 space-y-6">
                                <h3 class="text-2xl mb-0 font-semibold uppercase  tracking-wide text-white oswald-bold-500">
                                    Online Events</h3>
                                <span class="text-lg font-normal text-white mt-0">Filling text so you can see how it looks
                                    like
                                    with text. Did I said text?</span>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
@endsection
