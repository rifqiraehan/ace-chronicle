@extends('dashboard/layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <p class="fs-2">Selamat Datang, {{ auth()->user()->name }}!</p>
    <section id="minimal-statistics">
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-3">
                <div class="card shadow rounded border-2 border-primary">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-right">
                                    <h3>{{ $postByUser }}</h3>
                                    <span>Total Postingan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            @foreach ($postByUserByCategoryWithName as $categoryName => $count)
                <div class="col-xl-3 col-sm-6 col-12 my-3">
                    <div class="card shadow rounded border-2 border-success">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h3>{{ $count }}</h3>
                                        <span class="d-inline-block"
                                            style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Post
                                            {{ $categoryName }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
