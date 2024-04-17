@extends('layouts.websites.main')

@section('container')
    <div class="row pt-2 pb-5">
        @if($content->count())
            @foreach($content as $a)
                <div class="col-md-9">
                    <img src="{{ asset('storage') }}/{{ $a->images }}" class="rounded img-fluid rounded-start" alt="{{ $a->title }}">
                    <h3 class="mt-3" style="text-align: justify">{{ $a->title }}</h3>
                    <h6>{{ date('d M Y', strtotime($a->tanggal)) }}</h6>
                    <div class="mt-3" style="text-align: justify">
                        <?= $a["konten"];?>
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