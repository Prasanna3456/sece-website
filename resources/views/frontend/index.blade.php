@extends('layouts.app')
@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Tourney:ital,wght@1,900&display=swap" rel="stylesheet">
    <style>
        .glitch {
            font-family: "Tourney",cursive;
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
            background: url("{{ asset('assets/img/home_bg.jpeg') }}") no-repeat 50% 50%/cover;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
        }

        .glitch .glitch__title:before,
        .glitch .glitch__title:after {
            font-family: "Tourney",cursive;
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
            font-family: "Tourney",cursive;
            text-shadow: -1px 0 #00ffea;
            clip: rect(24px, 550px, 90px, 0);
            animation: glitch-anim 2s linear infinite alternate-reverse;
        }

        .glitch .glitch__title:after {
            left: -2px;
            font-family: "Tourney",cursive;
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
            font-family: 'Oswald', sans-serif;
            font-weight: 800;
        color: #fff;
        display: inline-block;
        text-align: center;
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
<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
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

  function initialLoader() {
		$('body').removeClass('noscroll');

		var loadText = '> Quintessence welcomes you!';
		var loaderDone = false;
		$.each(loadText.split(''), function(i, letter){
			setTimeout(function(){
				$('#loader-text').html($('#loader-text').html() + letter);
			}, 60*i);
		});

		setTimeout(function(){
			loaderDone = true;
		}, 1700);

    }

  var deadline = "Nov 12 2022, 9:00";
  initializeClock("countdown", deadline);

  initialLoader();
    </script>
@endsection
@section('content')

<div class="bg-black z-50 w-screen h-screen flex justify-start mx-auto absolute">
    <span id="loader-text" class="text-green-500 text-left text-lg mt-20 ml-5 oswald-bold-500 tracking-widest uppercase"></span>
    </div>

    <section>
        <div class="glitch h-screen">
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="glitch__item"></div>
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <h1
                class="glitch__title sm:text-5xl mt-40 lg:mt-20 md:mt-20 md:text-8xl text-4xl  lg:text-[120px] text-yellow-500 pb-5 lg:py-0 md:py-0 uppercase text-center">
                Quintessence</h1>
            <img src="{{ asset('assets/img/sliver-logo.png') }}" class="z-40  mx-auto w-44 lg:w-80 sm:w-52 pb-10"
                alt="">
            <!-- <p id="demo"
                class="z-40 text-white orbitron font-bold sm:text-5xl md:text-6xl text-4xl lg:text-6xl  md:py-0 my-0 text-center uppercase ">
            </p> -->
            <div id="countdown" class="countdown z-40 text-5xl">
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


    <section style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') ">

        <h1 class="sm:text-5xl text-center text-7xl text-yellow-500 lg:text-[110px]  px-5 py-5 lg:py-0  oswald-bold-800 uppercase">Events
        </h1>
        <div class="relative mx-auto max-w-7xl">
            <div class="grid container gap-6 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none">

                <div class="flex  duration-100 hover:scale-105 flex-col mb-12 overflow-hidden cursor-pointer bg-yellow-500 py-4 px-2"
                    style=" clip-path: polygon(0px 25px, 26px 0px, calc(60% - 25px) 0px, 60% 25px, 100% 25px, 100% calc(100% - 10px), calc(100% - 15px) calc(100% - 10px), calc(80% - 10px)  calc(100% - 10px), calc(80% - 15px) calc(100% - 0px), 10px  calc(100% - 0px), 0% calc(100% - 10px));">
                    <a href="{{ route('technical_events') }}">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="{{ asset('assets/img/tech_cover.jpeg') }}" alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <div class="flex-1 px-1 text-black">
                            <a href="{{ route('technical_events') }}" class="block mt-2 space-y-6">
                                <h3 class="text-2xl mb-0 font-semibold uppercase  tracking-wide  oswald-bold-500">
                                    Technical Events</h3>
                                <span class="text-lg font-normal  mt-0">Filling text so you can see how it looks
                                    like
                                    with text. Did I said text?</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex  duration-100 hover:scale-105 flex-col mb-12 overflow-hidden cursor-pointer bg-yellow-500 py-4 px-2""
                    style=" clip-path: polygon(0px 25px, 26px 0px, calc(60% - 25px) 0px, 60% 25px, 100% 25px, 100% calc(100% - 10px), calc(100% - 15px) calc(100% - 10px), calc(80% - 10px)  calc(100% - 10px), calc(80% - 15px) calc(100% - 0px), 10px  calc(100% - 0px), 0% calc(100% - 10px));">
                    <a href="{{ route('non_technical_events') }}">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="https://cdn.mos.cms.futurecdn.net/UcXeK6DWKBWdc3Ao4TZ9nU.jpg"
                                alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <a href="{{ route('non_technical_events') }}"></a>
                        <div class="flex-1 px-1 text-black">
                            <a href="{{ route('non_technical_events') }}" class="block mt-2 space-y-6">
                                <h3 class="text-2xl mb-0 font-semibold uppercase  tracking-wide  oswald-bold-500">
                                    Non Technical Events</h3>
                                <span class="text-lg font-normal  mt-0">Filling text so you can see how it looks
                                    like
                                    with text. Did I said text?</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex duration-100 hover:scale-105 flex-col mb-12 overflow-hidden cursor-pointer bg-yellow-500 py-4 px-2""
                    style=" clip-path: polygon(0px 25px, 26px 0px, calc(60% - 25px) 0px, 60% 25px, 100% 25px, 100% calc(100% - 10px), calc(100% - 15px) calc(100% - 10px), calc(80% - 10px)  calc(100% - 10px), calc(80% - 15px) calc(100% - 0px), 10px  calc(100% - 0px), 0% calc(100% - 10px));">
                    <a href="{{ route('online_events') }}">
                        <div class="flex-shrink-0 mt-3">
                            <img class="object-cover w-full h-48"
                                src="{{ asset('assets/img/online_event.jpeg') }}" alt="">
                        </div>
                    </a>
                    <div class="flex flex-col justify-between flex-1">
                        <a href="{{ route('online_events') }}"></a>
                        <div class="flex-1 px-1 text-black">
                            <a href="{{ route('online_events') }}" class="block mt-2 space-y-6">
                                <h3 class="text-2xl mb-0 font-semibold uppercase  tracking-wide oswald-bold-500">
                                    Online Events</h3>
                                <span class="text-lg font-normal  mt-0">Filling text so you can see how it looks
                                    like
                                    with text. Did I said text?</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') ">

        <h1 class="sm:text-5xl text-center text-6xl text-yellow-500 lg:text-[110px]  px-5 py-5 lg:py-0  oswald-bold-800 uppercase">About Us
        </h1>
        <section class="text-gray-400  body-font">
        <div class="container mx-auto flex px-5 pt-24  md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left  md:mb-0 items-center text-center">
            <h1 class=" w-full title-font sm:text-4xl text-4xl text-white lg:text-7xl mb-4  oswald-bold-800 uppercase">
                            Quintessence
                        </h1>
            <p class="mb-8 leading-relaxed">Quintessence, a national technical symposium hosted by the department of Electronics and Communication Engineering, showcases engineering brilliance. The symposium combines a wide range of technical and non-technical events, all of which are aimed to flummox our participants' thoughts and illuminate their knowledge while maintaining a positive atmosphere. With the use of a competitive platform, Quintessence aims to procure the top skills from them.</p>
            <div class="flex justify-center">
            </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('assets/img/sliver-logo.png') }}">
            </div>
        </div>
       </section>
       
        <section class="text-gray-400  body-font">
        <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
            <div class="lg:w-1/3 md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('assets/img/clg-logo.png') }}">
            </div>

            <div class="lg:flex-grow  md:w-1/2  md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center mx-10">
            <h1 class="w-full title-font sm:text-4xl text-4xl text-white lg:text-5xl mb-4  oswald-bold-800 uppercase">
                          Easwari Enginerring College
                        </h1>
            <p class="mb-8 leading-relaxed">Easwari Engineer­ing College, Auto­nomous From 2019, a unit of SRM Group of Edu­cat­ional Instit­utions for higher learning is funct­ioning under Valliammai Society. The College offers eleven Under-Graduate and six Post-Graduate Programmes covering Engineer­ing & Tech­nology, and Management.</p>
            <div class="flex justify-center">
            </div>
            </div>
        </div>
       </section>
    </section>
@endsection
