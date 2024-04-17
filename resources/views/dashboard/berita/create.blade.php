@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Berita</h1>
    </div>

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <form action="/main-dashboard/informasi/berita" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" id="title" value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal" id="tanggal" value="{{ old('tanggal') }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div> 
                        {{-- <div class="mb-3">
                            <label for="editor" class="form-label">Kontent</label>  
                            <textarea name="konten" id="editor" cols="30" rows="10" class="form-control @error('konten') is-invalid @enderror">{{ old('konten') }}</textarea>
                            @error('konten')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="konten" class="form-label">Kontent</label>
                            <input id="konten" type="hidden" name="konten" value="{{ old('konten') }}" class="form-control @error('konten') is-invalid @enderror">
                            <trix-editor input="konten"></trix-editor>
                            @error('konten')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="images" class="form-label">Upload Foto</label>
                            <input class="form-control @error('images') is-invalid @enderror" type="file" id="images" name="images" value="{{ old('images') }}">
                            @error('images')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <img class="imagePreview img-fluid img-thumbnail">
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('images') is-invalid @enderror" id="images" name="images" value="{{ old('images') }}" onchange="previewImage()">
                                    <label class="custom-file-label" for="images">Pilih Gambar...</label>
                                    @error('images')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
@endsection