@extends('layout.adminlayout')

@section('title', 'Blog Management')

@section('content')
    <div class="container">
        <h1>Blog Management</h1>
        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Tambah Blog</a> 
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Publish Date</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blog as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ Str::limit($blog->content, 100) }}</td>
                            <td>{{ $blog->published_at ? $blog->published_at->format('d M Y') : 'Not Published' }}</td>
                            <td>
                                @if($blog->image)
                                    <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" style="width: 100px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
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
