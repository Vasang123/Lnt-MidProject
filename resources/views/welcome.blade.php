@extends('layout/app')

@section('judul')
Mayong Library
@endsection

@section('isi')
    {{-- Banner --}}
    <div class="container text-white mt-4 rounded p-5 banner">
        <h1> <i class="uil uil-book-open"></i>Perpustakaan Mayong</h1>
        <p>Selamat Datang di Perpustakaan Mayong</p>
        <button type="button" class="btn btn-info"> <a href="{{url('/manage')}}" class="text-dark text-decoration-none">Manage Book</a></button>
        <button type="button" class="btn btn-warning"> <a href="{{url('/contact')}}" class="text-dark text-decoration-none">Contact Us</a></button>
    </div>
    {{-- Content --}}
    <div class="container  mt-2">
        <div class="row">
            @foreach ($books as $book)
            <div class="col-md-4 p-2">
                <div class=" col-md-12 p-2 isi">
                    <h1 class="judul">{{$book->judul}}</h1>
                    <span class="penulis badge bg-info ">Penulis: {{$book->penulis}}</span> <br>
                    <span class="halaman">Halaman: {{$book->halaman}}</span> <br>
                    <span class="tahun">Tahun Terbit: {{$book->tahun}}</span>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
    
    
    
@endsection
