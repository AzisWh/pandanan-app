@extends('layout.adminlayout')

@section('title','Update Home Welcome')

@section('content')
    <div class="container">
        <h1>Update Home Welcome</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('homepage.update', $homeWelcome->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $homeWelcome->title) }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $homeWelcome->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="imgtitle" class="form-label">Image Title</label>
                <input type="text" class="form-control" id="imgtitle" name="imgtitle" value="{{ old('imgtitle', $homeWelcome->imgtitle) }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (max 2mb)</label>
                @if ($homeWelcome->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$homeWelcome->image) }}" alt="{{ $homeWelcome->title }}" style="width: 100px;">
                    </div>
                @endif
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url('/homepage') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
