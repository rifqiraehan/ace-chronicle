@extends('dashboard/layouts.main')

@section('container')
<div class="container">
  <div class="row my-3" style="text-align: justify;">
      <div class="col-lg-12">
          <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Kembali</a>
          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white"><i class="bi bi-pencil text-white"></i> Edit</a>
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Apakah anda yakin untuk menghapus post tersebut?')"><i class="bi bi-trash"></i> Delete</button>
          </form>

          <h1 class="my-3">{{ $post->title }}</h1>

          @if ($post->image)
            <div style="overflow: hidden;">
              <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
          @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid mt-3">
          @endif

          <article class="my-3 fs-5">
              {!! $post->body !!}
          </article>
      </div>
  </div>
</div>
@endsection
