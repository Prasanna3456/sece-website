<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Primary Meta Tags -->
<title>Quintessence  — National Level Tech Symposium</title>
<meta name="title" content="Quintessence  — National Level Tech Symposium">
<meta name="description" content="Quintessence, a national technical symposium hosted by the department of Electronics and Communication Engineering, showcases engineering brilliance. The symposium combines a wide range of technical and non-technical events, all of which are aimed to flummox our participants thoughts and illuminate their knowledge while maintaining a positive atmosphere. With the use of a competitive platform, Quintessence aims to procure the top skills from them.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://quintessence2k22.com/">
<meta property="og:title" content="Quintessence  — National Level Tech Symposium">
<meta property="og:description" content="Quintessence, a national technical symposium hosted by the department of Electronics and Communication Engineering, showcases engineering brilliance. The symposium combines a wide range of technical and non-technical events, all of which are aimed to flummox our participants thoughts and illuminate their knowledge while maintaining a positive atmosphere. With the use of a competitive platform, Quintessence aims to procure the top skills from them.">
<meta property="og:image" content="{{ asset('assets/img/meta_image.jpeg') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://quintessence2k22.com/">
<meta property="twitter:title" content="Quintessence  — National Level Tech Symposium">
<meta property="twitter:description" content="Quintessence, a national technical symposium hosted by the department of Electronics and Communication Engineering, showcases engineering brilliance. The symposium combines a wide range of technical and non-technical events, all of which are aimed to flummox our participants thoughts and illuminate their knowledge while maintaining a positive atmosphere. With the use of a competitive platform, Quintessence aims to procure the top skills from them.">
<meta property="twitter:image" content="{{ asset('assets/img/meta_image.jpeg') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        .orbitron {
            font-family: 'Orbitron', sans-serif !important;
        }

        .oswald-bold-800 {
            font-family: 'Oswald', sans-serif;
            font-weight: 800;
        }

        .oswald-bold-500 {
            font-family: 'Oswald', sans-serif;
            font-weight: 500;
        }

        .custom-heading {
            color: '#FF003C';
        }

        ::-webkit-scrollbar {
            width: 6px;
            background-color: yellow;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #000000;
        }
    </style>
    @yield('css')
    <title>{{ config('app.name') }}</title>
</head>

<body class="bg-black">

    <main>
        @include('layouts.partials.navbar')
        @yield('content')
    </main>

    @include('layouts.partials.footer')
    {{-- <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.style.background = "#121212;"
                nav.style.backgroundColor = "rgba(10, 10, 10, 0.85)"
            } else {
                nav.style.background = ""
                nav.style.backgroundColor = ""
            }
        });
    </script> --}}
    @yield('js')
</body>

</html>
