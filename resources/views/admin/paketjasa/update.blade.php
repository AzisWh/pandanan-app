@extends('layout.adminlayout')

@section('title','Update Paket Jasa')

@section('content')
    <div class="container">
        <h1>Update Paket Jasa</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('paketjasa.update', $paketJasa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $paketJasa->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $paketJasa->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $paketJasa->price) }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (max 2mb)</label>
                @if ($paketJasa->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$paketJasa->image) }}" alt="{{ $paketJasa->title }}" style="width: 100px;">
                    </div>
                @endif
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url('/paketjasa') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
