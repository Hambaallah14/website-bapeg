@extends('layouts.dashboards.main')

@section('dashboard-content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">PPID</h1>
        <a href="/main-dashboard/informasi/ppid/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah PPID</a>
    </div>

    @if(session()->has('success-ppid'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success-ppid') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3"></div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Kategori Informasi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($ppid as $news)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ date('d M Y', strtotime($news->tanggal)) }}</td>
                                <td>{{ $news->title }}</td>
                                <td class="text-center">{{ $news->kategori }}</td>
                                <td>
                                    <a href="/main-dashboard/informasi/ppid/{{ $news->id }}/edit" class="btn btn-outline-warning">
                                        <i class="fas fa-fw fa-pen"></i>
                                    </a>
                                    

                                    <form action="/main-dashboard/informasi/ppid/{{ $news->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-outline-danger" title="Delete" onclick="return confirm('Apakah kamu yakin menghapus informasi ini ?')">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection