@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Visi Misi</h1>
    </div>

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <form action="/main-dashboard/profil/visi-misi" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <img class="imagePreviewGub img-fluid img-thumbnail">
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="custom-file">
                                    
                                    <input type="file" class="custom-file-input @error('imagegub') is-invalid @enderror" id="imagegub" name="imagegub" value="{{ old('imagegub') }}" onchange="previewImages('#imagegub', '.imagePreviewGub')">
                                    <label class="custom-file-label" for="imagegub">Pilih Gambar Gubernur...</label>
                                    @error('imagegub')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <img class="imagePreviewWagub img-fluid img-thumbnail">
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('imagewagub') is-invalid @enderror" id="imagewagub" name="imagewagub" value="{{ old('imagewagub') }}" onchange="previewImages('#imagewagub', '.imagePreviewWagub')">
                                    <label class="custom-file-label" for="images">Pilih Gambar Wakil Gubernur...</label>
                                    @error('imagewagub')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="visi" class="form-label">Visi</label>
                                <input id="visi" type="hidden" name="visi" value="{{ old('visi') }}" class="form-control @error('visi') is-invalid @enderror">
                                <trix-editor input="visi"></trix-editor>
                                @error('visi')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="misi" class="form-label">Misi</label>
                                <input id="misi" type="hidden" name="misi" value="{{ old('misi') }}" class="form-control @error('misi') is-invalid @enderror">
                                <trix-editor input="misi"></trix-editor>
                                @error('misi')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
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