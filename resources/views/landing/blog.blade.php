@extends('layout.layout')

@section('hero')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our News BLog</h4>
    </div>
</div>
<!-- Header End -->
@endsection

@section('content')

<!-- Blog Start -->
<div class="container-fluid blog py-5">
  <div class="container py-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
          <h4 class="text-uppercase text-primary">Our Blog</h4>
          <h1 class="display-3 text-capitalize mb-3">Latest Blog & News</h1>
      </div>
      <div class="row g-4 justify-content-center">
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
              <a href="{{url('/blogname')}}">
                  <div class="blog-item">
                      <div class="blog-img">
                          <img src="{{asset ('/landing/img/blog-1.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                          <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12 2025</div>
                      </div>
                      <div class="blog-content rounded-bottom p-4">
                          <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde</a>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officiis?</p>
                          <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                      </div>
                  </div>      
              </a>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
              <a href="{{url('/blogname')}}">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset ('/landing/img/blog-2.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                        <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12 2025</div>
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officiis?</p>
                        <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>      
              </a>
          </div>
          <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
              <a href="{{url('/blogname')}}">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset ('/landing/img/blog-3.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                        <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12 2025</div>
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officiis?</p>
                        <a href="#" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>      
              </a>
          </div>
      </div>
  </div>
</div>
<!-- Blog End -->

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
