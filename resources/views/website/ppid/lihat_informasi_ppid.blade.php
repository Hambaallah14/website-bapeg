@extends('layouts.websites.main')

@section('container')
    <div class="row pt-2 pb-5">
        @if($content->count())
            @foreach($content as $a)
                <div class="col-md-9">
                    <div class="card w-100 p-4">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{ asset('images/logo-layanan/ppid.jpg') }}" class="img-fluid rounded-start" style="width: 100%">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <p class="card-text text-start"><small class="text-body-secondary">Detail Dokumen</small></p>
                                    <h6 class="card-title text-start">{{ $a->title }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table text-start">
                                    <tr>
                                        <td>Nomor Dokumen / Tanggal</td>
                                        <td>:</td>
                                        <td><?= $a["konten"];?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Publish</td>
                                        <td>:</td>
                                        <td>
                                            <?php
                                                function FormatTanggal($tgl){
                                                    $bulan = array(
                                                        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                                                    );
                                                    $pecahkan = explode('-', $tgl);
                                                    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                                }
                                                echo FormatTanggal(date('Y-m-d', strtotime($a->tanggal)));
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kategori Dokumen</td>
                                        <td>:</td>
                                        <td><span class="badge text-bg-success">{{ $a->kategori }}</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-end">
                                <a href="{{ asset('storage') }}/{{ $a->files }}" class="btn btn-warning" target="blank"><i class="bi bi-download"></i> Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    
                </div>
            @endforeach
        @else
                <h3>Berita Tidak ada</h3>
        @endif
    </div>
@endsection