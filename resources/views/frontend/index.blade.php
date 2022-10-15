@extends('layouts.app')

@section('content')
<section>
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
</section>

{{-- About us section --}}
<section class="text-gray-900 bg-[#3A0067] body-font py-5" style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') ">
    {{-- <div class="overlay"></div> --}}
    <h1 class="sm:text-5xl text-5xl text-white lg:text-[110px]  px-5 py-5 lg:py-0   oswald-bold-800 uppercase">ABOUT US</h1>
 <div class="container mx-auto flex px-5 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class=" w-full title-font sm:text-4xl text-3xl text-white lg:text-4xl mb-4 font-medium h1 glitched cyberpunk orbitron uppercase">Quintessence 2k22
      </h1>
      <p class="mb-8 leading-relaxed text-gray-200">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        <button class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Button</button>
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