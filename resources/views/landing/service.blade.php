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
                          <img src="{{ $item->image ? asset('storage/public/' . $item->image) : asset('storage/default.jpg') }}" alt="Card {{$item->name ?? 'EMPTY'}}" style="width: 100px; height: 100px;">
                          </div>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>    
      @endforeach
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
