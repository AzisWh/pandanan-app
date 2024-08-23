<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Pandanan</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="icon" type="image/x-icon" href="{{asset ('assets/img/pandanan/icon.png')}}">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- libraries Stylesheet -->
        <link href="{{ asset ('/landing/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset ('/landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset ('/landing/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset ('/landing/css/style.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    </head>
<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary"><img src="{{asset ('/assets/img/pandanan/icon.png')}}" class="pr-3 rounded-circle" alt="">Pandanan</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Navbar links -->
                @include('components.navbar')
            </div>
        </nav>

        <!-- Hero Section -->
        @yield('hero')
    </div>
    <!-- Navbar & Hero End -->

    <div class="content">
        @yield('content')
    </div>
    
    @include('components.footer')

     <!-- JavaScriptlibraries -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
     <script src="{{asset ('/landing/lib/wow/wow.min.js')}}"></script>
     <script src="{{asset ('/landing/lib/easing/easing.min.js')}}"></script>
     <script src="{{asset ('/landing/lib/waypoints/waypoints.min.js')}}"></script>
     <script src="{{asset ('/landing/lib/counterup/counterup.min.js')}}"></script>
     <script src="{{asset ('/landing/lib/owlcarousel/owl.carousel.min.js')}}"></script>
     
 
     <!-- Template Javascript -->
     <script src="{{asset ('/landing/js/main.js') }}"></script>
     @stack('myscript')

   
</body>
</html>
