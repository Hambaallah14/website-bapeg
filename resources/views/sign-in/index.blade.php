<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="icon" href="{{ url('images/logo/logo-provsu.png') }}" type="image/x-icon">
    <link href="{{ asset('css/login/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/sign-in.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>

  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    
    <main class="form-signin w-100 m-auto">
      
      <form action="/login-backend" method="POST">
        @csrf
        <img class="mb-4 mx-auto d-block" src="{{ asset('images/logo/logo-bapeg.png') }}" width="40%">
        @if(session()->has('success'))
          {{-- BERHASIL --}}
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        
        @if(session()->has('login-error'))
          {{-- GAGAL --}}
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('login-error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="form-floating mb-3">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" autofocus required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <p class="copywrite-text text-center mt-3">Belum Registrasi ? <a href="/registrasi">Registrasi Sekarang</a></p>
        <p class="copywrite-text text-center mt-3">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
      </form>
    </main>
    <script src="{{ asset('js/login/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
