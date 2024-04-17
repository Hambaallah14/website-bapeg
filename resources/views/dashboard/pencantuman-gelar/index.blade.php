@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pencantuman Gelar</h1>
        <a href="/main-dashboard/layanan/pencantuman-gelar/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Create Alur Pencantuman Gelar</a>
    </div>

    @if(session()->has('success-pencantuman-gelar'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-pencantuman-gelar') }}
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
                        @if($data->count())
                            @php $no=1; @endphp
                            @foreach ($data as $img)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset('storage') }}/{{ $img->images }}" width="70%"></td>
                                    <td>
                                        <a href="/main-dashboard/layanan/pencantuman-gelar/{{ $img->id }}/edit" class="btn btn-outline-warning">
                                            <i class="fas fa-fw fa-pen"></i>
                                        </a>

                                        <form action="/main-dashboard/layanan/pencantuman-gelar/{{ $img->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger" title="Delete" onclick="return confirm('Apakah kamu yakin menghapus Alur Pensiun ini ?')">
                                                <i class="fas fa-fw fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr> 
                            @endforeach
                        @else
                                <td colspan="3">Data Tidak Ada</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection