<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>موقع عروض اليوم</title>
    <link rel="icon" type="image/png" href="{{ asset ('assets/img/line-chart.png') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
</head>
<body>
    <div id="app">
        @include('layouts.inc.frontnavbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.inc.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            setInterval(() => {
                fetch("{{ url('/keep-alive') }}");
            }, 5 * 60 * 1000); // كل 5 دقايق
        </script>
</body>
</html>
