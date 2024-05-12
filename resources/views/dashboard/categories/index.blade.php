@extends('dashboard/layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori Postingan</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
          {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-8">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Buat Kategori Baru</a>
      <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-success"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
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
