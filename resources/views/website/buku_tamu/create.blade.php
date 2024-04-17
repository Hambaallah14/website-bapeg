@extends('layouts.websites.main')

@section('container')
<div id="section-buku_tamu">
    <div class="row mb-5">
        <div class="col-md-12">
            <div data-aos="fade-up" class="card p-2" style="width: 100%">
                <h3>BUKU TAMU</h3>
            </div>
        </div>    
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/buku_tamu" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Lengkap...">
                    @error('nama')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email...">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea name="komentar" id="komentar" class="form-control @error('komentar') is-invalid @enderror">{{ old('komentar') }}</textarea>
                    @error('komentar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>    
    </div>
</div>
@endsection