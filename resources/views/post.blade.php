@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center text-justify mb-5" style="text-align: justify;">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>Dari <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> di <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="mt-3 text-decoration-none btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

@endsection