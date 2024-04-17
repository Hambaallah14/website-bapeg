@extends('layouts.websites.main')

@section('container')
    <div class="row">
        <div class="col-md-8">
            <h5 data-aos="fade-up">Pengumuman</h5>
        </div>
        <div class="col-md-4">
            <form action="/pengumuman">
                <div class="input-group mb-3" data-aos="fade-down">
                    <input type="search" name="pengumuman-search" class="form-control" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="button-search" value="{{ request('pengumuman-search') }}">
                    <button type="submit" id="button-search" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @if($pengumuman->count())
            @foreach ($pengumuman as $news)
                <div class="col-md-6" data-aos="fade-down">
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
                </div>
            @endforeach
        @else
            <h6 class="text-center" data-aos="fade-down">Maaf Pengumuman Tidak ditemukan</h6>
        @endif
    </div>

    <div class="row mb-2 mt-5 pb-2" data-aos="fade-down">
        <div class="col-md-12 d-flex justify-content-center">
            {{ $pengumuman->links() }}
        </div>
    </div>
@endsection