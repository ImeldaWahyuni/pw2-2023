@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movie Data Genre</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genre</li>
        </ol>
        <a href="/genres/create">
            <button class="btn btn-success" type="submit">Create Genre</button>
        </a>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data Genre
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($genres as $genre)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$genre->nama}}</td>
                        <td>{{$genre->deskripsi}}</td>
                        <td>
                            <a href="/genres/{{ $genre->id }}/edit" class="btn btn-sm btn-warning"> Edit</a>
                            <form action="/genres/{{ $genre->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection