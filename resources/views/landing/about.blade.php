@extends('layout.layout')

@section('hero')
<!-- Carousel Start -->
<div class="carousel-header">
    <div id="carouselId" class="carousel-about slide" data-bs-ride="carousel">
        <div class="carousel-inner-about" role="listbox">
            <div class="carousel-item-about active">
                <img src="{{asset ('/assets/img/pandanan/inkarang.jpeg')}}" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption-1-about">
                    <div class="carousel-caption-1-content-about" style="max-width: 900px;">
                        <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">DISCOVER THE HEART OF PANDANAN MARINE TECHNOPARK</h1>
                        <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">Immerse yourself in the beauty and innovation that drives our vision to conserve, educate, and explore the wonders of Indonesia's marine biodiversity. 
                        </p>
                        <div class="carousel-caption-1-content-btn-about fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                            <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2 fw-bold" href="{{url ('/reservasi')}}">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
@endsection

@section('content')

<!-- About Start -->
<div class="container-fluid about overflow-hidden py-5">
    <div class="container py-5">
        @foreach ($about as $item)
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('storage/default.jpg') }}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="{{ $item->imgtitle ?? 'EMPTY' }}">
                        <div class="about-exp"><span>{{$item->imgtitle}}</span></div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-black text-uppercase">What Is </h4>
                        <h1 class="display-3 mb-3">{{ $item->title ?? 'EMPTY' }}</h1>
                        <p class="mb-4">{{ $item->description ?? 'EMPTY' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- About End -->


<!-- Paket Jasa -->
<div class="container-fluid counter py-5">
    <section class="container my-5">
        <h2 class="text-center mb-4 text-white">Meet Our Team</h2>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('/assets/img/pandanan/teamup.jpeg')}}" class="img-fluid rounded" alt="Meet Our Team">
                </div>
            </div>
      </section>      
</div>
<!-- Paket Jasa -->

<!-- Kelebihan, Visi, dan Misi -->
<div class="container my-5">
    <div class="text-center mb-4">
        <h2>Our Strengths and Vision</h2>
        <p>Learn more about our core strengths, vision, and mission.</p>
    </div>
    <div class="row">
        @foreach ($visimisi as $item)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white text-center p-3" style="background-color: rgba(25, 64, 154, 0.9);">
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">{{$item->cardtitle}}</h5>
                        <p class="card-text fw-light">{{$item->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Akhir Kelebihan, Visi, dan Misi -->



@include('components.gallery')

@endsection

@push('myscript')

@endpush
