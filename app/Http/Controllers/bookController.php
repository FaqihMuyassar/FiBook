<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class bookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('buku', [
            'title' => 'Admin',
            'books' => Book::all()
        ]);
    }

    public function tambah() {
        return view('create', [
            'title' => 'Admin'
        ]);
    }

    public function edit() {
        $bookId = request('id');
        $book = Book::where('id', $bookId)->first();

        return view('edit', [
            'title' => 'Admin',
            'book' => $book,
        ]);
    }

    public function update()
    {
        $bookId = request('id');
        $judul_buku = request('judul_buku');
        $jenis_buku = request('jenis_buku');

        $book = Book::where('id', $bookId)->first();
        $book->judul_buku = $judul_buku;
        $book->jenis_buku = $jenis_buku;
        $book->save();

        return redirect()->intended('/buku');
    }

    public function store() {

        $book = new book;
        $book->judul_buku = request('judul_buku');
        $book->jenis_buku = request('jenis_buku');
        $book->save();

        return redirect()->route('buku');

    }


    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('buku');
    }

}
