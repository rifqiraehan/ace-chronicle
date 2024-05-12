@extends('dashboard/layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Post {{ auth()->user()->name }}</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-12">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Buat Post Baru</a>
      <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-success"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin untuk menghapus post tersebut?')"><i class="bi bi-trash"></i></button>
                </form>
               </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>


@endsection
