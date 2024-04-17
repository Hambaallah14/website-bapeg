@extends('layouts.websites.main')

@section('container')
    <div class="row">
        <div class="col-md-3" data-aos="fade-down">
            <div class="card mt-3 p-3"  style="width: 100%;">
              <img src="{{ asset('storage') }}/<?=$visi_misi[0]["imagegub"]?>" class="card-img" alt="<?=$visi_misi[0]["imagegub"]?>">
            </div>
        </div>

        <div class="col-md-6" >
            <div class="card mt-3 p-4"  style="width: 100%;" data-aos="fade-up" data-aos-duration="200">
              <h4>VISI DAN MISI PROVINSI SUMATERA UTARA <br>2018-2023</h4>
            </div>
            <div class="card mt-3 text-start p-5"  style="width: 100%;" data-aos="fade-up" data-aos-duration="400">
              <h5>VISI</h5>
              <?= $visi_misi[0]['visi'];?>
            </div>
            <div class="card mt-3 text-start p-5"  style="width: 100%;" data-aos="fade-up" data-aos-duration="600">
              <h5>MISI</h5>
              <?= $visi_misi[0]['misi'];?>
            </div>
        </div>

        <div class="col-md-3" data-aos="fade-down">
            <div class="card mt-3 p-3"  style="width: 100%;">
              <img src="{{ asset('storage') }}/<?=$visi_misi[0]["imagewagub"]?>" class="card-img" alt="<?=$visi_misi[0]["imagewagub"]?>">
            </div>
        </div>
    </div>
@endsection