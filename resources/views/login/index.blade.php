@extends('layouts.main')

@section('container')

<div class="row d-flex justify-content-center">
  <div class="col-md-4">
    <main class="form-signin w-100 m-auto mt-5">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
      <form action="/login" method="POST">
        @csrf
        <div class="form-floating">
          <input type="username" name="username" class="form-control rounded-0 rounded-top @error('username') is-invalid @enderror" id="username" placeholder="johndoe" autofocus required value="{{ old('username') }}">
          <label for="username">Username atau Email</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-0 rounded-bottom" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>

        <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Belum Daftar? <a href="/register" class="text-decoration-none">Daftar Sekarang!</a></small>
      <hr>
      <small class="d-block text-center mt-3">Lupa Password? <a id="whatsapp-link" target="_blank" class="text-decoration-none">Hubungi Admin!</a></small>
    </main>
  </div>
</div>

<script>
  const phoneNumber = "6287852027464";
  const message = "Halo min, Saya [nama/username/email] lupa password akun saya di ACE Blog, mohon reset password saya ya. Terima kasih!";
  const encodedMessage = encodeURIComponent(message);
  const whatsappLink = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

  document.getElementById('whatsapp-link').href = whatsappLink;
</script>

@endsection

