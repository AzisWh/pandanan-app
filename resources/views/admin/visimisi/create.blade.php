@extends('layout.adminlayout')

@section('title','Kelebihan')

@section('content')
    <div class="container">
        <h1>Kelebihan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('visimisi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="cardtitle" class="form-label">Judul Card</label>
                <input type="text" class="form-control" id="cardtitle" name="cardtitle" value="{{ old('cardtitle') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url('/visimisi') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
