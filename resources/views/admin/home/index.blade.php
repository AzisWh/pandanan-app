@extends('layout.adminlayout')

@section('title','Test')

@section('content')
    <div class="container">
        <a href="#" class="btn btn-primary mb-2">Tambah Data</a>
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
        <div class="table-responsive">
           
        </div>
    </div>
@endsection