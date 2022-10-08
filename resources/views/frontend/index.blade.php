@extends('layouts.app')

@section('content')
<div id="cyberSlider" class="cyber-slider">
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

Image and text
You can also make use of some additional utilities to add an image and text at the same time. Note the addition of .d-inline-block and .align-text-top on the <img>.

Logo Bootstrap
HTML


<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>
Nav
Navbar navigation links build on our .nav options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned.

Add the .active class on .nav-link to indicate the current page.

Please note that you should also add the aria-current attribute on the active .nav-link.

Navbar
Home
Features
Pricing
Disabled
HTML


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
And because we use classes for our navs, you can avoid the list-based approach entirely if you like.

Navbar
Home
Features
Pricing
Disabled
HTML


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav>
You can also use dropdowns in your navbar. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for .nav-item and .nav-link as shown below.

Navbar
Home
Features
Pricing
Dropdown link
HTML


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
Forms
Place various form controls and components within a navbar:

Search
HTML


<nav class="navbar bg-light">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
Immediate child elements of .navbar use flex layout and will default to justify-content: space-between. Use additional flex utilities as needed to adjust this behavior.

Navbar
Search
HTML


<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
Input groups work, too. If your navbar is an entire form, or mostly a form, you can use the <form> element as the container and save some HTML.

@
Username
HTML


<nav class="navbar bg-light">
  <form class="container-fluid">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
</nav>
Various buttons are supported as part of these navbar forms, too. This is also a great reminder that vertical alignment utilities can be used to align different sized elements.

HTML


<nav class="navbar bg-light">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2" type="button">Main button</button>
    <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
  </form>
</nav>
Text
Navbars may contain bits of text with the help of .navbar-text. This class adjusts vertical alignment and horizontal spacing for strings of text.

Navbar text with an inline element
HTML


<nav class="navbar bg-light">
  <div class="container-fluid">
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>
Mix and match with other components and utilities as needed.

Navbar w/ text
Home
Features
Pricing
Navbar text with an inline element
HTML


<nav class="navbar navbar-expand-lg bg-light">
@endsection