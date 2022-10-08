<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', sans-serif !important;
        }
    </style>
    <title>{{ config('app.name') }}</title>
</head>

<body>
    @include('layouts.partials.navbar')
    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
    <script src="{{ asset('js/slider.js') }}"></script>
</body>

</html>
