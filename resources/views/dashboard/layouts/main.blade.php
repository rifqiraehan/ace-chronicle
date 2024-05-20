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
</head>

<body>
  <main class="d-flex">
    <div class="sidebar-wrapper no-print">
        @include('dashboard.layouts.sidebar')
    </div>

    <div class="b-example-vr no-print"></div>

    <div class="content-wrapper container pt-5">
        @yield('container')
    </div>
</main>

  <!-- Bootstrap Bundle with Popper -->
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="/js/trix.umd.min.js"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>