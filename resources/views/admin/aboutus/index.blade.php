@extends('layout.adminlayout')

@section('title','About us Landing')

@section('content')
    <div class="container">
        <h1>About us Controller</h1>
        @if($itemCount < 1)
            <a href="{{ route('aboutus.create') }}" class="btn btn-primary mb-3">Tambah</a> 
        @else
            <button class="btn btn-secondary mb-3" disabled>Max 1 item</button>
        @endif
        <a href="{{ route('landing.about') }}" target="_blank" class="btn btn-warning mb-3">Cek Tampilan</a> 
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($about as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->imgtitle }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                @if($item->image)
                                    <img src="{{ asset('storage/public/'.$item->image) }}" alt="{{ $item->title }}" style="width: 100px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('aboutus.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('aboutus.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
