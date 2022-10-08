<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <title>Document</title>
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
