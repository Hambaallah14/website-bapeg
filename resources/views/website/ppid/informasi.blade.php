@extends('layouts.websites.main')

@section('container')
    <div class="row">
        <div class="col-md-7">
            <h5 data-aos="fade-up">PPID</h5>
        </div>
        <div class="col-md-5">
            <form action="/ppid/informasi">
                <div class="input-group mb-3" data-aos="fade-down">
                    
                    <select name="kategori-search" id="" class="form-control" aria-label="Pencarian" aria-describedby="button-search">
                        <option value="">--Pilih Kategori--</option>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                        @endforeach
                    </select>
                    <input type="search" name="ppid-search" class="form-control" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="button-search" value="{{ request('ppid-search') }}">
                    <button type="submit" id="button-search" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @if($ppid->count())
            @foreach ($ppid as $news)
                <div class="col-md-6" data-aos="fade-down">
                    <a href="/ppid/informasi/lihat/{{ $news->id }}">
                        <div class="card mt-3"  style="width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="{{ url('images/logo-layanan/ppid.jpg') }}" class="img-fluid rounded-start" alt="{{ $news->images }}" width="100%">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title text-start">{{ Str::limit($news->title, 110, '...') }}</h6>
                                        <p class="card-text text-start"><small class="text-body-secondary">{{ date('d M Y', strtotime($news->tanggal)) }}</small></p>
                                    </div>
                                </div>
                                <div class="col-md-2 p-2 text-end">
                                    <span class="card-text badge text-bg-success">{{ $news->kategori }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @else
            <h6 class="text-center" data-aos="fade-down">Maaf Informasi Tidak ditemukan</h6>
        @endif
    </div>

    <div class="row mb-2 mt-5 pb-2" data-aos="fade-down">
        <div class="col-md-12 d-flex justify-content-center">
            {{ $ppid->links() }}
        </div>
    </div>
@endsection