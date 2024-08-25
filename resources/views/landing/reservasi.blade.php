@extends('layout.layout')

@section('hero')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Choose Your Trip</h4>
    </div>
</div>
<!-- Header End -->
@endsection

@section('content')
<!-- Booking Section Start -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Pilih Paket Jasa</h5>
                </div>
                <div class="card-body">
                    <!-- Package Options -->
                    @foreach($reservasi as $package)
                    <div class="trip-option mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h6>{{ $package->title }}</h6>
                                <p class="mb-0">Duration: {{ $package->duration }}</p>
                                <p class="text-muted">{{ $package->description }}</p>
                            </div>
                            <div class="col-md-3 text-primary">
                                <p>Price</p>
                                <p class="mb-0">Rp {{ number_format($package->price, 0, ',', '.') }} / pax</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <button 
                                    class="btn btn-primary btn-sm choose-package" 
                                    data-title="{{ $package->title }}"
                                    data-duration="{{ $package->duration }}"
                                    data-price="{{ number_format($package->price, 0, ',', '.') }}"
                                    data-id="{{ $package->id }}"
                                >
                                    Choose
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Inquiry Summary</h5>
                </div>
                <div class="card-body">
                    <p>Package: <span id="summary-package">-</span></p>
                    <p>Duration: <span id="summary-duration">-</span></p>
                    <h5>Total: Rp <span id="summary-total">-</span></h5>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-success" id="order-button" disabled>Pesan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking Section End -->
@endsection

@push('myscript')
<script>
    $(document).ready(function() {
        $('.choose-package').click(function() {
            // Get package details from data attributes
            var title = $(this).data('title');
            var duration = $(this).data('duration');
            var price = $(this).data('price');
            var packageId = $(this).data('id');

            // Update the summary section
            $('#summary-package').text(title);
            $('#summary-duration').text(duration);
            $('#summary-total').text('Rp ' + price);

            // Store package ID in the "Pesan" button for use in the order process
            $('#order-button').data('package-id', packageId);
            $('#order-button').removeAttr('disabled'); 
        });

        $('#order-button').click(function() {
            var packageId = $(this).data('package-id');
            window.location.href = '{{ route("order.create") }}?package_id=' + packageId;
        });
    });
</script>
@endpush
