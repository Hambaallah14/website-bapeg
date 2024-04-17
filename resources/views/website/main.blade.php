@extends('layouts.websites.main')

@section('container')
    @if(session()->has('success-buku_tamu'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-buku_tamu') }}
        </div>
    @endif
    
    <div class="row">
        <div class="col-md-6" data-aos="fade-up">
            <h6>BERITA</h6>
            @if($berita->count())
                @foreach ($berita as $news)
                    <a href="/berita/lihat/{{ $news->slug }}">
                        <div class="card mt-3"  style="width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('storage') }}/{{ $news->images }}" class="img-fluid rounded-start" alt="{{ $news->images }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title text-start">{{ Str::limit($news->title, 75, '...') }}</h6>
                                        <p class="card-text text-start"><small class="text-body-secondary">{{ date('d M Y', strtotime($news->tanggal)) }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <a href="/berita" class="mt-3 btn btn-outline-success float-end">Berita Lainnya</a>
            @else
                <h6 class="text-center mb-3" data-aos="fade-down">Maaf Berita Tidak ada</h6>
            @endif

            
        </div>

        <div class="col-md-6" data-aos="fade-up">
            <h6>PENGUMUMAN</h6>
            @if($pengumuman->count())
                @foreach ($pengumuman as $news)
                    <a href="{{ asset('storage') }}/{{ $news->files }}" target="blank">
                        <div class="card mt-3"  style="width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{ url('images/logo-layanan/pengumuman.jpg') }}" class="img-fluid rounded-start" alt="{{ $news->images }}" width="100%">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h6 class="card-title text-start">{{ Str::limit($news->title, 90, '...') }}</h6>
                                    <p class="card-text text-start"><small class="text-body-secondary">{{ date('d M Y', strtotime($news->tanggal)) }}</small></p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </a>
                @endforeach
                <a href="/pengumuman" class="mt-3  btn btn-outline-success float-end">Pengumuman Lainnya</a>
            @else
                <h6 class="text-center mb-3" data-aos="fade-down">Maaf Pengumuman Tidak ada</h6>
            @endif
        </div>
    </div>
@endsection