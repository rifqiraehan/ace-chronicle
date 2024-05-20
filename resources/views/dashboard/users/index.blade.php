@extends('dashboard/layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar User</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <div class="d-flex mb-3 no-print">
            <a href="/dashboard/users/create" class="btn btn-primary me-2 no-print">Buat User Baru</a>

            <a href="#" onclick="window.print(); return false;" class="btn btn btn-success no-print">
                Export
            </a>
        </div>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th class="no-print">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="no-print">
                            <a href="/dashboard/users/{{ $user->id }}" class="badge bg-success"><i
                                    class="bi bi-eye"></i></a>
                            <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><i
                                    class="bi bi-pencil"></i></a>
                            <form action="/dashboard/users/{{ $user->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Apakah anda yakin untuk menghapus user tersebut?')"><i
                                        class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
