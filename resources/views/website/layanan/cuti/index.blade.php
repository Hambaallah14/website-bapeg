@extends('layouts.websites.main')

@section('container')
    <div id="section-struktur_organisasi">
        <div class="row mb-5">
            <div class="col-md-12">
                <div data-aos="fade-up" class="card p-4" style="width: 100%">
                    <h3 class="text-center">Alur Prosedur Pengajuan Cuti</h3>
                </div>
            </div>    
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if($data->count())
                    @foreach ($data as $img)
                        <img src="{{ asset('storage') }}/{{ $img->images }}" width="100%" data-aos="fade-down">
                    @endforeach
                @else
                    <h5 class="text-center">Data tidak ada</h5>
                @endif
                
            </div>
        </div>
    </div>
@endsection