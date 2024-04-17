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
  </head>

  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        
      <form action="/registrasi" method="POST">
        <img class="mb-4 mx-auto d-block" src="{{ asset('images/logo/logo-bapeg.png') }}" width="40%">
        <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>
        @csrf
        <div class="form-floating mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}">
          <label for="name">Nama Lengkap</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" value="{{ old('password') }}">
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Registrasi</button>
        <p class="copywrite-text text-center mt-3">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
      </form>
    </main>
    <script src="{{ asset('js/login/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
