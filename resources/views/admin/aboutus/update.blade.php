@extends('layout.adminlayout')

@section('title','Update About Us')

@section('content')
    <div class="container">
        <h1>Update About Us</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('aboutus.update', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $about->title) }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $about->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="imgtitle" class="form-label">Image Title</label>
                <input type="text" class="form-control" id="imgtitle" name="imgtitle" value="{{ old('imgtitle', $about->imgtitle) }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (max 2mb)</label>
                @if ($about->image)
                    <div class="mb-2">
                        <img src="{{ Storage::url($about->image) }}" alt="{{ $about->title }}" style="width: 100px;">
                    </div>
                @endif
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url('/aboutus') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
