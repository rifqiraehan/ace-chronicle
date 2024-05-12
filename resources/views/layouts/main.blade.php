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