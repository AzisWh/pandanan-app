@extends('layout.adminlayout')

@section('title','Faq Accordion')

@section('content')
    <div class="container">
        <h1>Faq Controller</h1>
        <a href="{{ route('faq.create') }}" class="btn btn-primary mb-3">Tambah</a> 
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>AccordionName</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faq as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->question }}</td>
                            <td>{{ $item->answer }}</td>
                            <td>{{ $item->accordionname }}</td>
                            <td>
                                <a href="{{ route('faq.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('faq.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
