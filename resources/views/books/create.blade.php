@extends('layout/app')


@section('judul', 'Create Book')
@section('isi')
<div class="container my-5">
    <div class="rounded p-3 col-md-8 manage-table">
        <h3 class="display-6 mb-5"> <i class="uil uil-plus-circle"></i> Create Book</h3>
        <hr>
        <form method="POST" action="{{url('/manage/create')}}">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Judul Buku</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Masukkan Judul Buku" value = "{{old('judul')}}">
                @error('judul')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Penulis</label>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" placeholder="Masukkan Nama Penulis" value = "{{old('penulis')}}">
                @error('penulis')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Jumlah Halaman</label>
                <input type="number" class="form-control @error('halaman') is-invalid @enderror" name="halaman" placeholder="Masukkan Jumlah Halaman" value = "{{old('halaman')}}">
                @error('halaman')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" placeholder="Masukkan Tahun Terbit" value = "{{old('tahun')}}">
                @error('tahun')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>
@endsection