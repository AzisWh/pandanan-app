
            <div class="navbar-nav ms-auto py-0">
                <a href="{{url ('/')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{url ('/about-us')}}" class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About</a>
                <a href="{{url ('/service')}}" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Service</a>
                <a href="{{url ('/ourblog')}}" class="nav-item nav-link {{ Request::is('ourblog') ? 'active' : '' }}">Blog</a>
            </div>
            {{-- <div class="d-none d-xl-flex me-3">
                <div class="d-flex flex-column pe-3 border-end border-primary">
                    <span class="text-body">Get Free Delivery</span>
                    <a href="tel:+4733378901"><span class="text-primary">Free: + 0123 456 7890</span></a>
                </div>
            </div> --}}
            {{-- <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
            <a href="" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Book Now</a>
  