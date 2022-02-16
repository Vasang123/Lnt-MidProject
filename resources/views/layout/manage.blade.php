@extends('layout/app')

@section('judul', 'Manage Book')

@section('isi')
<div class="container mt-2">
    <div class=" rounded p-3 col-md-8 manage-table">
    <h3 class="mt-3">  <i class="uil uil-edit"></i> Manage Books</h3>
    <hr>
    <button type="button" class="btn btn-dark"> <i class="uil uil-plus-circle"></i> <a href="{{url('manage/create')}}" class="text-white text-decoration-none">Create Book</a></button>
    @if (session()->has('sukses'))
    <div class="alert alert-secondary mt-2" role="alert">
        {{session('sukses')}}
        <i class="uil uil-check-circle"></i>
    </div>        
    @endif
    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul</th>
              <th scope="col">Penulis</th>
              <th scope="col">Halaman</th>
              <th scope="col">Tahun Terbit</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
            $i=1;
            @endphp
            @foreach ($books as $book)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$book->judul}}</td>
                <td>{{$book->penulis}}</td>
                <td>{{$book->halaman}}</td>
                <td>{{$book->tahun}}</td>
                <td>
                    <button type="button" class="btn btn-primary">
                        <a href="{{url('/books/'. $book->id)}}" class="text-white text-decoration-none">
                            Update
                        </a>
                    </button>
                    <button type="button" class="btn btn-danger">
                        <a href="#" class="text-white text-decoration-none" onclick="event.preventDefault();document.getElementById('delete-form-{{$book->id}}').submit();">
                            Delete
                            <form id="delete-form-{{$book->id}}" action="{{url('books/'. $book->id)}}" method="POST" style="display:none";>
                                @csrf
                                @method('DELETE');
                            </form>
                        </a>
                    </button>
                </td>
            </tr>
            @endforeach
          </tbody>
    </table>
    <hr>
    </div>
</div>
@endsection