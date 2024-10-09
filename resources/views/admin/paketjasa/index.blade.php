@extends('layout.adminlayout')

@section('title','Paket Jasa Edit')

@section('content')
    <div class="container">
        <h1>Paket Jasa Controller</h1>
        <a href="{{ route('paketjasa.create') }}" class="btn btn-primary mb-3">Tambah</a> 
        <a href="{{ route('landing.index') }}" target="_blank" class="btn btn-warning mb-3">Cek Tampilan pada Home</a> 
        <a href="{{ route('landing.service') }}" target="_blank" class="btn btn-warning mb-3">Cek Tampilan pada Service</a> 
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paketJasa as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                @if($item->image)
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" style="width: 100px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('paketjasa.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('paketjasa.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
