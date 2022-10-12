@extends('layouts.app')

@section('content')
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
@endsection