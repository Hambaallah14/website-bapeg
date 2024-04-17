<div id="carouselExampleIndicators" class="carousel slide" style="margin-top: 70px;">
    <div class="carousel-indicators">
        @php $no_= 0; @endphp
        @foreach ($slide_banner as $button)
            @if($no_++ == 0)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $no_-1 }}" class="active" aria-current="true" aria-label="{{ ($no_-1)+1 }}"></button>
            @else
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $no_-1 }}" aria-label="{{ ($no_-1)+1 }}"></button>
            @endif
        @endforeach

        
    </div>
    <div class="carousel-inner">
        @php $no=1; @endphp
        @foreach ($slide_banner as $img)
            @if($no++ == 1)
                <div class="carousel-item active">
                    <img src="{{ asset('storage') }}/{{ $img->images }}" class="d-block w-100" alt="...">
                </div>
            @else
                <div class="carousel-item">
                    <img src="{{ asset('storage') }}/{{ $img->images }}" class="d-block w-100" alt="...">
                </div>
            @endif
        @endforeach
        
         
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>