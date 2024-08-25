@extends('layout.layout')

@section('hero')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Order Payment</h4>
    </div>
</div>
<!-- Header End -->
@endsection

@section('content')
<div class="container my-5">
    <h2>Complete Your Order</h2>

    <!-- Display selected package details -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Selected Package</h5>
        </div>
        <div class="card-body">
            <p><strong>Package Name:</strong> {{ $reservasiItem->title }}</p>
            <p><strong>Duration:</strong> {{ $reservasiItem->duration }}</p>
            <p><strong>Price:</strong> Rp {{ number_format($reservasiItem->price, 0, ',', '.') }} / pax</p>
            <p><strong>Description:</strong> {{ $reservasiItem->description }}</p>
        </div>
    </div>

    <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="reservasiitem_id" value="{{ $reservasiItem->id }}">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="whatsapp" class="form-label">WhatsApp Number</label>
            <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
        </div>

        <div class="mb-3">
            <label for="payment_account" class="form-label">Payment Method</label>
            <input type="text" class="form-control" id="payment_account" name="payment_account" required>
        </div>

        <div class="mb-3">
            <label for="payment_proof" class="form-label">Upload Bukti Payment (max 2mb)</label>
            <input type="file" class="form-control" id="payment_proof" name="payment_proof" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>
</div>
@endsection
