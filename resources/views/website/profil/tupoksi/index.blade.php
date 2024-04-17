<?php
use App\Http\Controllers\CWebsites;
use App\Models\Tugasbidang_model;
?>

@extends('layouts.websites.main')

@section('container')
  <div id="section-tupoksi">
    <div class="row mb-5">
      <div class="col-md-12">
          <div data-aos="fade-up" class="card p-4" style="width: 100%">
              <h3 class="text-center">TUGAS, FUNGSI, URAIAN TUGAS BADAN KEPEGAWAIAN PROVINSI SUMATERA UTARA</h3>
          </div>
      </div>

      <div class="col-md-12 mt-5">
        <div class="row">

          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
              @foreach ($bidang as $data)
                @if($data->id == 1)
                  <a class="list-group-item list-group-item-action active" id="list-{{ $data->id }}" data-bs-toggle="list" href="#bid-{{ $data->id }}" role="tab" aria-controls="bid-{{ $data->id }}"><?=$data["bidang"];?></a>
                @else
                <a class="list-group-item list-group-item-action" id="list-{{ $data->id }}" data-bs-toggle="list" href="#bid-{{ $data->id }}" role="tab" aria-controls="bid-{{ $data->id }}"><?=$data["bidang"];?></a>
                @endif
              @endforeach
            </div>
          </div>

          <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
              @foreach ($bidang as $data)
                @if($data->id == 1)
                  <div class="tab-pane fade show active" id="bid-{{ $data->id }}" role="tabpanel" aria-labelledby="list-{{ $data->id }}">
                    <h5>Tugas {{ $data->bidang }}</h5>
                    <?php
                      $tugas = Tugasbidang_model::where('bidang_id', $data->id)->get();
                      foreach($tugas as $a){
                        echo $a["tugas"];
                      }
                    ?>
                  </div>
                @else
                  <div class="tab-pane fade" id="bid-{{ $data->id }}" role="tabpanel" aria-labelledby="list-{{ $data->id }}">
                    <h5>Tugas {{ $data->bidang }}</h5>
                    <?php
                      $tugas = Tugasbidang_model::where('bidang_id', $data->id)->get();
                      foreach($tugas as $a){
                        echo $a["tugas"];
                      }
                    ?>
                  </div>
                @endif
              @endforeach
            </div>
          </div>

        </div>
      </div>  

    </div>
  </div>
@endsection