@extends('layout.adminlayout')

@section('title','Create Layanan')

@section('content')
    <div class="container">
        <h1>Create Layanan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('layanan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="accordionname" class="form-label">AccordionName (samakan dengan title)</label>
                <input type="text" class="form-control" id="accordionname" name="accordionname" value="{{ old('accordionname') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (max 2mb)</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url('/layanan') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
