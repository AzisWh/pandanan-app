@extends('layout.layout')

@section('hero')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        
    </div>
</div>
<!-- Header End -->
@endsection

@section('content')

@include('components.ourservice')

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
        </div>
      </section>      
</div>
<!-- Paket Jasa -->


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
