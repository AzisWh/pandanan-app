@extends('layout.adminlayout')

@section('title','Update FAQ')

@section('content')
    <div class="container">
        <h1>Update FAQ</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <input type="text" class="form-control" id="question" name="question" value="{{ old('question', $faq->question) }}" required>
            </div>
            <div class="mb-3">
                <label for="answer" class="form-label">Answer</label>
                <textarea class="form-control" id="answer" name="answer" rows="3" required>{{ old('answer', $faq->answer) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="accordionname" class="form-label">AccordionName</label>
                <input type="text" class="form-control" id="accordionname" name="accordionname" value="{{ old('accordionname', $faq->accordionname) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url('/faq') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
