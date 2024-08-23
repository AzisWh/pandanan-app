@extends('layout.layout')

@section('hero')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Blog (Name)</h4>
    </div>
</div>
<!-- Header End -->
@endsection

@section('content')

<!-- Blog Detail Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="blog-detail">
                    <div class="blog-img">
                        <img src="{{asset('/landing/img/blog-1.jpg')}}" class="img-fluid rounded w-100" alt="">
                        <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12 2025</div>
                    </div>
                    <div class="blog-content p-4">
                        <h2 class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, officiis? Quasi dicta repellendus laudantium nostrum facere magnam ratione commodi reprehenderit. Voluptatum non facilis voluptate quaerat eligendi nisi dolores, deleniti at!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatem accusantium cumque iure quo, necessitatibus aspernatur dignissimos laudantium, nostrum illo tempore mollitia vero. Facere harum alias voluptatum incidunt. A, ex?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Detail End -->

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
