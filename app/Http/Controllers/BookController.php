<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller{
    public function index(){
        $books = Book::all();
        return view('layout/manage',compact('books'));
    }
    public function create(){
        $books = Book::all();
        return view('books/create',compact('books'));
    }
    public function store(Request $request){
        $request->validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'halaman' => 'required|integer|min:1',
            'tahun' => 'required|integer|min:2000|max:2021',

        ]);

        Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun' => $request->tahun,
        ]);
        return redirect('/manage')->with('sukses','Buku berhasil ditambahkan');
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('books/edit', compact('book'));
    }
    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required|string|min:5|max:20',
            'penulis' => 'required|string|min:5|max:20',
            'halaman' => 'required|integer|min:1',
            'tahun' => 'required|integer|min:2000|max:2021',

        ]);
        $book = Book::findOrFail($id);
        $book->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun' => $request->tahun,
        ]);
        return redirect('/manage')->with('sukses','Buku berhasil diupdate');

    }
    public function destroy($id){
        $book=Book::findorFail($id);
        $book->delete();
        return redirect('/manage')->with('sukses','Buku berhasil dihapus');
    }
}
