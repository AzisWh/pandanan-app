@extends('layout.adminlayout')

@section('title','Kelebihan Section')

@section('content')
    <div class="container">
        <h1>Kelebihan Controller</h1>
        <a href="{{ route('visimisi.create') }}" class="btn btn-primary mb-3">Tambah</a> 
        <a href="{{ route('landing.about') }}" target="_blank" class="btn btn-warning mb-3">Cek Tampilan</a> 
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul Card</th>
                        <th>Deskripsi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($visimisi as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->cardtitle }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <a href="{{ route('visimisi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('visimisi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
