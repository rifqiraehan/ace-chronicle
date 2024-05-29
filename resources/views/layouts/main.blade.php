<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACE Blog | {{ $title }}</title>

    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="{{asset('bootstrap/icons/font/bootstrap-icons.min.css')}}" rel="stylesheet">

    {{-- My Style --}}
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      * {
        font-family: "Poppins", sans-serif;
      }
    </style>

  </head>
  <body>

    @include('partials.navbar')

    <div class="container mt-5">
        @yield('container')
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>