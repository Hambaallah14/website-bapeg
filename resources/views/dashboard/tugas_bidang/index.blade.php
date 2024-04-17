@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Uraian Tugas Bidang</h1>   
    </div>

    @if(session()->has('success-uraian'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-uraian') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian Tugas</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($tugas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><?= $data["tugas"];?></td>
                                
                                <td>
                                    <a href="/main-dashboard/profil/tupoksi/bidang/{{ $data->bidang_id }}/{{ $data->id }}" class="btn btn-outline-warning">
                                        <i class="fas fa-fw fa-pen"></i>
                                    </a>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection