@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pengumuman</h1>
    </div>

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <form action="/main-dashboard/informasi/pengumuman/<?=$pengumuman[0]["id"];?>" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" id="title" value="{{ old('title', $pengumuman[0]["title"]) }}">
                            @error('title')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal" id="tanggal" value="{{ old('tanggal', $pengumuman[0]["tanggal"]) }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                {{ $message }}
                                </div>
                            @enderror
                        </div> 
                        

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <img class="filePreview img-fluid img-thumbnail" src="{{ asset('images/logo-layanan/pengumuman.jpg') }}">
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="custom-file">
                                    <input type="hidden" name="oldFile" value="{{ $pengumuman[0]["files"] }}">
                                    <input type="file" class="custom-file-input @error('files') is-invalid @enderror" id="files" name="files" onchange="previewFilePengumuman()">
                                    <label class="custom-file-label" for="files">Pilih File...</label>
                                    @error('files')
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