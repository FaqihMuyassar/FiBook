<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Book;

class borrowController extends Controller
{
    public function borrow() {
        return view('user', [
            'title' => 'Siswa',
            'books' => Book::all()
        ]);
    }

    public function index() {
        return view('dashboard', [
            'title' => 'Admin',
            'borrows' => Borrow::all()
        ]);
    }

    public function form() {

        $borrow = new borrow;
        $borrow->nama = request('nama');
        $borrow->kelas = request('kelas');
        $borrow->judul_buku = request('judul_buku');
        $borrow->tanggal_peminjaman = request('tanggal_peminjaman');
        $borrow->tanggal_pengembalian = request('tanggal_pengembalian');
        $borrow->save();

        return redirect()->route('admin');
    }

    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
        return redirect()->route('dashboard');
    }
}
