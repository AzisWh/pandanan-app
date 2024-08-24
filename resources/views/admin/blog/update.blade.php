@extends('layout.adminlayout')

@section('title', 'Update Blog')

@section('content')
    <div class="container">
        <h1>Update Blog</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3" required>{{ old('content', $blog->content) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="published_at" class="form-label">Publish Date</label>
                <input type="date" class="form-control" id="published_at" name="published_at" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d') : '') }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (max 2mb)</label>
                @if ($blog->image)
                    <div class="mb-2">
                        <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" style="width: 100px;">
                    </div>
                @endif
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('blog.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
