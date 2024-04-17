@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Alur Prosedur</h1>
    </div>

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <form action="/main-dashboard/layanan/jabatan-fungsional/<?=$data[0]["id"];?>" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <img class="imagePreview img-fluid img-thumbnail" src="{{ asset('storage') }}/<?=$data[0]["images"]?>">
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="custom-file">
                                    <input type="hidden" name="oldFile" value="{{ $data[0]["images"] }}">
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
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>
@endsection