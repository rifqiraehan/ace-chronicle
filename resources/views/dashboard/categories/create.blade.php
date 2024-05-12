@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Kategori Baru</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/categories" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
            </div>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            </div>
            @error('slug')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="mb-3">
                <label for="image" class="form-label">Upload Banner Kategori</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            </div>
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-primary">Buat Kategori</button>
        </form>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        // document.addEventListener('trix-file-accept', function(e) {
        //     e.preventDefault();
        // });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>

@endsection
