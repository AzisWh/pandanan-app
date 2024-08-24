@extends('layout.adminlayout')

@section('title', 'Create New Blog')

@section('content')
    <div class="container">
        <h1>Create New Blog</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3" required>{{ old('content') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="published_at" class="form-label">Publish Date</label>
                <input type="date" class="form-control" id="published_at" name="published_at" value="{{ old('published_at') }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (max 2mb)</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('blog.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
