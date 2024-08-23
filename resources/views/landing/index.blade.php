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
                            <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Book Now</a>
                                <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">View Website</a>
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
                            <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Book Now</a>
                                <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2" href="#">View Website</a>
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
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img rounded h-100">
                    <img src="{{asset ('/assets/img/pandanan/pantai.jpeg')}}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                    <div class="about-exp"><span>Pantai Pandanan</span></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-item">
                    <h4 class="text-primary text-uppercase">Selamat Datang </h4>
                    <h1 class="display-3 mb-3">di Taman Laut Pandanan.</h1>
                    <p class="mb-4">Taman Laut Pandanan adalah surga tersembunyi di Lombok Utara yang menawarkan keindahan bawah laut yang menakjubkan.
                        Dengan terumbu karang yang masih alami dan beragam biota laut, Taman Laut Pandanan menjadi destinasi favorit bagi para
                        pecinta snorkeling dan diving. Air laut yang jernih memungkinkan Anda menikmati panorama bawah laut yang memukau.
                    </p>
                    <p class="mb-4">Selain keindahan bawah lautnya, Taman Laut Pandanan juga memiliki pantai dengan pasir putih yang menenangkan.
                        Tempat ini ideal untuk Anda yang mencari ketenangan dan ingin menjauh sejenak dari keramaian.
                        Ayo, jelajahi keindahan Taman Laut Pandanan dan rasakan pengalaman tak terlupakan di sini!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Paket Jasa -->
<div class="container-fluid counter py-5">
    <section class="container my-5">
        <h2 class="text-center mb-4 text-white">Paket dan Jasa Wisata</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="service-item rounded p-4 mb-4">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex">
                    <div class="service-content text-end">
                      <a href="#" class="h5 d-inline-block mb-3">Fun Diving</a>
                      <p class="mb-0">Alat SCUBA set, makan 1x, dokumentasi, guide, perahu. Durasi 2,5 jam. Rp 300.000/pax.</p>
                    </div>
                    <div class="ps-4">
                      <div class="service-btn">
                        <img src="{{ asset ('/assets/img/pandanan/fundiving.png')}}" alt="Fun Diving Icon" style="width: 100px; height: 100px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="service-item rounded p-4 mb-4">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex">
                    <div class="service-content text-end">
                      <a href="#" class="h5 d-inline-block mb-3">Snorkeling</a>
                      <p class="mb-0">Snorkeling gear, makan 1x, dokumentasi, guide, perahu. Durasi 1,5 jam. Rp 400.000/5 pax.</p>
                    </div>
                    <div class="ps-4">
                      <div class="service-btn">
                        <img src="{{ asset ('/assets/img/pandanan/snorkling.png')}}" alt="Snorkeling Icon" style="width: 100px; height: 100px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="service-item rounded p-4 mb-4">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex">
                    <div class="service-content text-end">
                      <a href="#" class="h5 d-inline-block mb-3">Research</a>
                      <p class="mb-0">Alat SCUBA set, dokumentasi, guide, perahu. Rp 350.000/pax.</p>
                    </div>
                    <div class="ps-4">
                      <div class="service-btn">
                        <img src="{{ asset ('/assets/img/pandanan/research.png')}}" alt="Research Icon" style="width: 100px; height: 100px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="service-item rounded p-4 mb-4">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex">
                    <div class="service-content text-end">
                      <a href="#" class="h5 d-inline-block mb-3">Sunset Trip</a>
                      <p class="mb-0">Dokumentasi, guide, perahu. Durasi 1 jam. Rp 250.000/5 pax.</p>
                    </div>
                    <div class="ps-4">
                      <div class="service-btn">
                        <img src="{{ asset ('/assets/img/pandanan/sunsettrip.png')}}" alt="Sunset Trip Icon" style="width: 100px; height: 100px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="service-item rounded p-4 mb-4">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex">
                    <div class="service-content text-end">
                      <a href="#" class="h5 d-inline-block mb-3">Tracking Bukit Melka</a>
                      <p class="mb-0">Transportasi, snack, guide, dokumentasi. Durasi 4-6 jam. Rp 150.000/5 pax.</p>
                    </div>
                    <div class="ps-4">
                      <div class="service-btn">
                        <img src="{{ asset ('/assets/img/pandanan/tracking.png')}}" alt="Tracking Bukit Melka Icon" style="width: 100px; height: 100px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="service-item rounded p-4 mb-4">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex">
                    <div class="service-content text-end">
                      <a href="#" class="h5 d-inline-block mb-3">Fishing</a>
                      <p class="mb-0">Dokumentasi, guide, perahu. Rp 700.000/5 pax.</p>
                    </div>
                    <div class="ps-4">
                      <div class="service-btn">
                        <img src="{{ asset ('/assets/img/pandanan/fishing.png')}}" alt="Fishing Icon" style="width: 100px; height: 100px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>          
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
                <a href="#" class="btn btn-primary mb-3">Jelajahi Layanan Kami</a>
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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            How does the booking process work?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The booking process is simple and straightforward. You can book online through our website or contact us directly for assistance.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Do I need travel and diving insurance?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we highly recommend that all our guests have travel and diving insurance for their own safety and peace of mind.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Are children allowed on board?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Children are welcome on board, but we recommend checking specific trip details to ensure the experience is suitable for them.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What is included in my trip?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our trips typically include accommodation, meals, guided tours, and snorkeling or diving equipment. Please refer to the specific trip details.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What are the excluded features?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Typically, exclusions include personal expenses, alcoholic beverages, and any additional activities not specified in the itinerary.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Can you help me with my flights?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we can assist you with flight bookings and provide recommendations based on your travel dates and destination.
                        </div>
                    </div>
                </div>

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
