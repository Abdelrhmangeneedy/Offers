<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset ('assets/img/line-chart.png') }}">

        <title>موقع العروض</title>
     <!-- Styles -->

     <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 g-sidenav-show bg-gray-200" style="background-color: hsl(0, 0%, 96%)">
        <div class="g-sidenav-show bg-gray-200">
            <main class="main-content position-relative border-radius-lg">
                @include('layouts.inc.adminnavbar')
                <div class="content vh-auto">
                  @yield('content')
                </div>
            </main>
        </div>

        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
              var options = {
                damping: '0.5'
              }
              Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>



        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if (session('status'))
        <script>
            swal("{{ session('status') }}")
        </script>
        @endif
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            setInterval(() => {
                fetch("{{ url('/keep-alive') }}");
            }, 5 * 60 * 1000); // كل 5 دقايق
        </script>
    </body>
</html>
