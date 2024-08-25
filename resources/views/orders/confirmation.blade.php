@extends('layout.layout')


@section('content')
<div class="container my-5" style="padding-top: 100px">
    <h2>Order Confirmation</h2>

    <div class="alert alert-success">
        <h1 class="fw-bold">NOTE "PESAN INI HANYA MUNCUL 1X, PASTIKAN ANDA MENYIMPAN NOMOR KONTAK YANG TERTERA"</h1>
        <p>Thank you, {{ $order->name }}. Your order for the package "{{ $order->reservasiItem->title }}" has been placed successfully.</p>
        <p>Please wait for up to 24 hours for confirmation. If you do not receive a response, please contact us at the following number: <b>+62 823-3992-5375</b></p>
    </div>
    <a href="{{url('/')}}" class="btn btn-primary">Kembali ke Home Page</a>
</div>
@endsection
