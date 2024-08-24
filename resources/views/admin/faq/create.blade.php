@extends('layout.adminlayout')

@section('title','Create Faq')

@section('content')
    <div class="container">
        <h1>Create Faq</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <textarea class="form-control" id="question" name="question" rows="3" required>{{ old('question') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <input type="text" class="form-control" id="answer" name="answer" value="{{ old('answer') }}" required>
            </div>
            <div class="mb-3">
                <label for="accordionname" class="form-label">AccordionName</label>
                <input type="text" class="form-control" id="accordionname" name="accordionname" value="{{ old('accordionname') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ url('/faq') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
