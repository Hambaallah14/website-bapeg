@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="h5 mb-0 text-gray-800">{{ $ppid->title }}</h5>
    </div>

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td>{{ $ppid->title }}</td>
                </tr>
                <tr>
                    <td>Tanggal Publish</td>
                    <td>:</td>
                    <td>{{ $ppid->tanggal }}</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td>{{ $ppid->content }}</td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
@endsection