@extends('dashboard/layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
    </div>
    <p class="fs-2">Selamat Datang, {{ auth()->user()->name }}!</p>
@endsection
