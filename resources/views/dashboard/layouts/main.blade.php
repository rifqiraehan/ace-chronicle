<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACE Blog | Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="{{ asset('bootstrap/icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">

    {{-- My Style --}}
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">

    {{-- Hide upload file in trix --}}
    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }

      .navbar-brand {
        font-family: "Playfair Display", Georgia, "Times New Roman", serif;
      }

      * {
        font-family: "Poppins", sans-serif;
      }
    </style>
</head>

<body>
  <main class="d-flex flex-nowrap">
    @include('dashboard.layouts.sidebar')

    <div class="b-example-vr"></div>

    <div class="container pt-5 scrollarea">
        @yield('container')
    </div>

  </main>

  <!-- Bootstrap Bundle with Popper -->
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="/js/trix.umd.min.js"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>