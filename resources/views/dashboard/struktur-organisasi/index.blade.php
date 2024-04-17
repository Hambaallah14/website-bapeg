@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Struktur Organisasi</h1>
        <a href="/main-dashboard/profil/struktur-organisasi/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Create Struktur organisasi</a>
    </div>

    @if(session()->has('success-struktur'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-struktur') }}
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
                            <th>Image</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($struktur as $img)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('storage') }}/{{ $img->images }}" width="70%"></td>
                                <td>
                                    <a href="/main-dashboard/profil/struktur-organisasi/{{ $img->id }}/edit" class="btn btn-outline-warning">
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