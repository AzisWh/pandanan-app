@extends('layout.adminlayout')

@section('title','Managing Order')

@section('content')
<div class="container my-5">
    <h2>Manage Orders</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Package</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>WhatsApp</th>
                <th>Payment Proof</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->reservasiItem->title }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->whatsapp }}</td>
                <td>
                    @if($order->payment_proof)
                        <a href="{{ asset('storage/' . $order->payment_proof) }}" target="_blank">View Proof</a>
                    @else
                        <span>No Proof Uploaded</span>
                    @endif
                </td>
                <td>{{ ucfirst($order->status) }}</td>
                <td>
                    <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
