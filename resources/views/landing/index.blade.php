@extends('layout.layout')

@section('hero')
<!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{asset ('/assets/img/pandanan/bg-1.JPG')}}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-1">
                        <div class="carousel-caption-1-content" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Taman Laut</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Pandanan Marine Technopark</h1>
                            {{-- <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p> --}}
                            <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="{{url ('/reservasi')}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset ('/assets/img/pandanan/bg-2.JPG')}}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-2">
                        <div class="carousel-caption-2-content" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Taman Laut</h4>
                            <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Pandanan Marine Technopark</h1>
                            {{-- <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p> --}}
                            <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="{{url ('/reservasi')}}">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!-- Carousel End -->
@endsection

@section('content')

<!-- About Start -->
<div class="container-fluid about overflow-hidden py-5">
    <div class="container py-5">
        @foreach ($homeWelcomes as $item)
          <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img rounded h-100">
                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="{{ $item->imgtitle ?? 'EMPTY' }}">
                    <div class="about-exp"><span>{{ $item->imgtitle ?? 'EMPTY' }}</span></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-item">
                    <h4 class="text-primary text-uppercase">Selamat Datang </h4>
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
        <h2 class="text-center mb-4 text-white">Paket dan Jasa Wisata</h2>
        <div class="row">
        @foreach ($paketJasa as $item)
          <div class="col-md-4 mb-4">
            <div class="service-item rounded p-4 mb-4">
              <div class="row">
                    <div class="col-12">
                        <div class="d-flex">
                        <div class="service-content text-end">
                            <a href="#" class="h5 d-inline-block mb-3">{{$item->name}}</a>
                            <p class="mb-0">{{$item->description}}</p>
                            <h5 class="fw-bold">Rp. {{$item->price}}/pax.</h4>
                        </div>
                        <div class="ps-4">
                            <div class="service-btn">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('storage/default.jpg') }}" alt="Card {{$item->name ?? 'EMPTY'}}" style="width: 100px; height: 100px;">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center mt-4">
            <a href="{{url ('/service')}}" class="btn btn-primary p-3" style="font-size: 20px">More Detail</a>
        </div>  
        </div>
      </section>      
</div>
<!-- Paket Jasa -->

<!-- Mengapa Memilih Taman Laut Pandanan -->
<div class="container-fluid product py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="text-black mb-4 fw-bold">Mengapa Memilih Taman Laut Pandanan?</h2>
                <p>Jika Anda mencari petualangan laut yang tak terlupakan, Taman Laut Pandanan adalah tujuan utama Anda. Kami menawarkan pengalaman laut tradisional Indonesia yang dipadukan dengan fasilitas modern, memastikan keseruan dan kenyamanan bagi Anda.</p>
                <ul class="list-unstyled">
                    <li class="d-flex mb-3">
                        <i class="bi bi-check-circle-fill text-primary me-3"></i>
                        <span>Pengalaman eksplorasi bawah laut dan pulau yang disesuaikan</span>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-check-circle-fill text-primary me-3"></i>
                        <span>Pemandu yang ramah dan berpengetahuan</span>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-check-circle-fill text-primary me-3"></i>
                        <span>Peralatan menyelam dan snorkeling yang mutakhir</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="{{asset ('/assets/img/pandanan/whychoose3.JPG')}}" class="img-fluid rounded" alt="Petualangan Laut 1">
                    </div>
                    <div class="col-6">
                        <img src="{{asset ('/assets/img/pandanan/whychoose2.JPG')}}" class="img-fluid rounded" alt="Petualangan Laut 2">
                    </div>
                    <div class="col-6">
                        <img src="{{asset ('/assets/img/pandanan/whychoose1.JPG')}}" class="img-fluid rounded" alt="Petualangan Laut 3">
                    </div>
                    <div class="col-6">
                        <img src="{{asset ('/assets/img/pandanan/whychoose4.JPG')}}" class="img-fluid rounded" alt="Petualangan Laut 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Mengapa Memilih Taman Laut Pandanan -->

@include('components.ourservice')

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Newest Blog</h4>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($blog as $blog)
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="{{ route('landing.blogdetail', $blog->id) }}">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('storage/'.$blog->image) }}" class="img-fluid rounded-top w-100" alt="{{ $blog->title }}">
                                <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> {{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') : 'Not Published' }}</div>
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <a href="{{ route('landing.blogdetail', $blog->id) }}" class="h4 d-inline-block mb-3">{{ $blog->title }}</a>
                                <p>{{ Str::limit($blog->content, 100) }}</p>
                                <a href="{{ route('landing.blogdetail', $blog->id) }}" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>      
                    </a>
                </div>
            @endforeach
        </div>
    </div>
  </div>
  <!-- Blog End -->

<div class="container">
    <hr style="border: 2px solid black;">
</div>

<!-- FAQ Section -->
<div class="container my-5">
    <div class="row">
        <!-- Frequently Asked Questions Text -->
        <div class="col-lg-4 mb-4 mb-lg-0">
            <h2 class="fw-bold text-center">Frequently Asked Questions</h2>
        </div>

        <!-- Accordion -->
        <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">
                @foreach ($faq as $item)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne{{ $item->accordionname }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->accordionname }}" aria-expanded="false" aria-controls="collapse{{ $item->accordionname }}">
                            {{ $item->question }}
                        </button>
                    </h2>
                    <div id="collapse{{ $item->accordionname }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $item->accordionname }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{$item->answer}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
<!-- End FAQ Section -->
@include('components.gallery')

@endsection


@push('myscript')
    <script>
        $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
    </script>
@endpush
