@extends('layout/app')


@section('judul', ' Edit Book')
@section('isi')
<div class="container my-5">
    <div class="rounded p-3 col-md-8 manage-table">
        <h3 class="display-6 mb-5"> <i class="uil uil-pen"></i> Update Book</h3>
        <hr>
        <form method="POST" action="{{url('books/'. $book->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label  class="form-label">Judul Buku</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Masukkan Judul Buku" value = "{{$book->judul}}">
                @error('judul')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Penulis</label>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" placeholder="Masukkan Nama Penulis" value = "{{$book->penulis}}">
                @error('penulis')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Jumlah Halaman</label>
                <input type="number" class="form-control @error('halaman') is-invalid @enderror" name="halaman" placeholder="Masukkan Jumlah Halaman" value = "{{$book->halaman}}">
                @error('halaman')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" placeholder="Masukkan Tahun Terbit" value = "{{$book->tahun}}">
                @error('tahun')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</div>
@endsection