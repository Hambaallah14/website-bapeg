@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buku Tamu</h1>
    </div>

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Device/Mac Address</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($buku_tamu as $buku)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $buku->nama }}</td>
                                <td>{{ $buku->email }}</td>
                                <td>{{ $buku->device }}</td>
                                <td>{{ $buku->komentar }}</td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection