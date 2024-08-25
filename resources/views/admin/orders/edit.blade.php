@extends('layout.adminlayout')

@section('title','Managing Order')

@section('content')
<div class="container my-5">
    <h2>Edit Order Status</h2>

    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Customer Name</label>
            <input type="text" class="form-control" id="name" value="{{ $order->name }}" disabled>
        </div>

        <div class="mb-3">
            <label for="package" class="form-label">Package</label>
            <input type="text" class="form-control" id="package" value="{{ $order->reservasiItem->title }}" disabled>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ $order->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Status</button>
    </form>
</div>
@endsection
