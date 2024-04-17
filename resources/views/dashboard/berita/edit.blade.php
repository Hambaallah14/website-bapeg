@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Berita</h1>
    </div>

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <form action="/main-dashboard/informasi/berita/<?=$berita[0]["id"];?>" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" id="title" value="{{ old('title', $berita[0]["title"]) }}">
                            @error('title')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal" id="tanggal" value="{{ old('tanggal', $berita[0]["tanggal"]) }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div> 
                        {{-- <div class="mb-3">
                            <label for="editor" class="form-label">Kontent</label>  
                            <textarea name="konten" id="editor" cols="30" rows="10" class="form-control @error('konten') is-invalid @enderror">{{ old('konten', $berita[0]["konten"]) }}</textarea>
                            @error('konten')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label for="konten" class="form-label">Kontent</label>
                            <input id="konten" type="hidden" name="konten" value="{{ old('konten', $berita[0]["konten"]) }}" class="form-control @error('konten') is-invalid @enderror">
                            <trix-editor input="konten"></trix-editor>
                            @error('konten')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <img class="imagePreview img-fluid img-thumbnail" src="{{ asset('storage') }}/{{ $berita[0]["images"] }}">
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="custom-file">
                                    <input type="hidden" name="oldImage" value="{{ $berita[0]["images"] }}">
                                    <input type="file" class="custom-file-input @error('images') is-invalid @enderror" id="images" name="images" onchange="previewImage()">
                                    <label class="custom-file-label" for="images">Pilih Gambar...</label>
                                    @error('images')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
@endsection