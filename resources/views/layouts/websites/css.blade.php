<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<link rel="icon" href="{{ url('images/logo/logo-provsu.png') }}" type="image/x-icon">
{{-- <link rel="stylesheet" href="{{ asset('css/website/styles.css') }}"> --}}
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .btn-layanan{
        background-color: #3B7C7F;
        color: white;
    }
    .btn-layanan:hover{
        background-color: #0fb9b1;
        color: white;
    }

    a{
        text-decoration: none;
    }

    div.card {
        width: 250px;
        box-shadow: 0 4px 2px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
        text-align: center;
    }

    .card:hover{
        cursor: pointer;
    }

    @media (min-width: 576px) {
        .mySwiper{
            width: 100%;
        }
    }
</style>