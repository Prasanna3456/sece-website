@extends('layouts.app')
@section('css')
    <style>
        @font-face {
            font-family: dirtchunk ;
            src: url("{{ asset('dirtchunk.otf') }}");
        }

        .quint_font {
            font-family: dirtchunk;
        }
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

        .countdown {
        font-family: sans-serif;
        color: #fff;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 30px;
        }

        .countdown-number {
        /* padding: 10px;
        border-radius: 3px;
        background: #FF003C; */
        display: inline-block;
        }

        .countdown-time {
        padding: 15px;
        color: yellow;
        border-radius: 3px;
        background: rgba(0,0,0,0.5);
        display: inline-block;
        }

        .countdown-text {
        display: block;
        padding-top: 5px;
        font-size: 16px;
        }
    

    </style>
@endsection
@section('js')
    <script>
        function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      total: t,
      days: days,
      hours: hours,
      minutes: minutes,
      seconds: seconds
    };
  }

  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector(".days");
    var hoursSpan = clock.querySelector(".hours");
    var minutesSpan = clock.querySelector(".minutes");
    var secondsSpan = clock.querySelector(".seconds");

    function updateClock() {
      var t = getTimeRemaining(endtime);

      if (t.total <= 0) {
        clearInterval(timeinterval);
        var timer_text = document.getElementById('timer_exp');

        timer_text.classList.remove('hidden');
        clock.classList.add('hidden');

        var newTime = Date.parse(endtime);
        var nowTime = Date.parse(new Date());

    
        var deadline = new Date('Nov 12, 2022, 9:00');
        initializeClock('countdown', deadline);
      } else {
        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
        minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
        secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
      }
      return;
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
    return;
  }

  var deadline = "Nov 12 2022, 9:00";
  initializeClock("countdown", deadline);
    </script>
@endsection
@section('content')
    <section>
        <div class="glitch h-screen">
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <h1
                class="glitch__title  quint_font sm:text-5xl mt-40 lg:mt-20 md:mt-20 md:text-8xl text-6xl  lg:text-[150px] text-yellow-500 pb-5 lg:py-0 md:py-0 oswald-bold-800 uppercase text-center">
                Quintessence</h1>
            <img src="{{ asset('assets/img/sliver-logo.png') }}" class="z-40  mx-auto w-44 lg:w-72 sm:w-52 pb-10"
                alt="">
            <!-- <p id="demo"
                class="z-40 text-white orbitron font-bold sm:text-5xl md:text-6xl text-4xl lg:text-6xl  md:py-0 my-0 text-center uppercase ">
            </p> -->
            <div id="countdown" class="countdown z-40">
            <div class="countdown-number">
                <span class="days countdown-time"></span>
                <span class="countdown-text">Days</span>
            </div>
            <div class="countdown-number">
                <span class="hours countdown-time"></span>
                <span class="countdown-text">Hours</span>
            </div>
            <div class="countdown-number">
                <span class="minutes countdown-time"></span>
                <span class="countdown-text">Minutes</span>
            </div>
            <div class="countdown-number">
                <span class="seconds countdown-time"></span>
                <span class="countdown-text">Seconds</span>
            </div>
        </div>
        <div id="timer_exp" class="hidden z-40 text-4xl text-center text-yellow-500 md:text-5xl lg:text-5xl  font-semibold text-white oswald-bold-500">
            TODAY'S THE DAY
        </div>

            {{-- <div class="mouse flex justify-center mx-auto mt-10 lg:mt-2 md:mt-2"></div>
            <p class="register_text flex justify-center mx-auto">Scroll</p> --}}
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
                    <a href="{{ route('technical_events') }}">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="https://cdn.mos.cms.futurecdn.net/UcXeK6DWKBWdc3Ao4TZ9nU.jpg" alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <div class="flex-1 px-1">
                            <a href="{{ route('technical_events') }}" class="block mt-2 space-y-6">
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
                    <a href="{{ route('non_technical_events') }}">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="https://cdn.vox-cdn.com/thumbor/MNz6SMRdP43YGJdsUvW-rBflRd8=/0x0:3840x2160/1400x1050/filters:focal(1920x1080:1921x1081)/cdn.vox-cdn.com/uploads/chorus_asset/file/20053035/Cyberpunk_2077_screen_10.jpg"
                                alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <a href="{{ route('non_technical_events') }}"></a>
                        <div class="flex-1 px-1">
                            <a href="{{ route('non_technical_events') }}" class="block mt-2 space-y-6">
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
                    <a href="{{ route('online_events') }}">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="https://cdn.mos.cms.futurecdn.net/UcXeK6DWKBWdc3Ao4TZ9nU.jpg" alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <a href="{{ route('online_events') }}"></a>
                        <div class="flex-1 px-1">
                            <a href="{{ route('online_events') }}" class="block mt-2 space-y-6">
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
