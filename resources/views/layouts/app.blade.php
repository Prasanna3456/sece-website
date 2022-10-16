<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
    @yield('intersect')
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
    <script>
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
    </script>
    @yield('js')
</body>

</html>
