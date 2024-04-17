@extends('layouts.websites.main')

@section('container')
    <div id="section-struktur_organisasi">
        <div class="row mb-5">
            <div class="col-md-12">
                <div data-aos="fade-up" class="card p-4" style="width: 100%">
                    <h3 class="text-center">STRUKTUR ORGANISASI BADAN KEPEGAWAIAN PROVINSI SUMATERA UTARA</h3>
                </div>
            </div>    
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <img src="{{ asset('storage') }}/<?= $struktur[0]['images']?>" width="100%" data-aos="fade-down">
            </div>
        </div>
    </div>
@endsection