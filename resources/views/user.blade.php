@extends('components.main')

@section('content')
    <div class="w-full md:px-16 md:py-16 px-4 py-4">
        <h1 class="font-bold text-4xl mb-16 text-test text-center">Form Peminjaman Buku Perpustakaan</h1>
        <form action="" method="POST">
            @csrf
            <div class="flex flex-col gap-4 mb-8">
                <label class="font-semibold text-2xl">Judul Buku</label>
                <input type="text" name="judul_buku" id="judul_buku" placeholder="Silahkan isi judul buku"
                    class="border-2 border-black w-full p-4 rounded-lg text-xl" required>
            </div>
            {{-- <div class="mb-6 flex flex-col gap-4">
                <label class="font-semibold text-2xl">Judul Buku</label>
                <select id="judul_buku" class="p-4 text-xl w-full border-2 border-black rounded-lg">
                    <option disabled selected class="text-xl">Pilih Judul Buku</option>
                    @foreach ($books as $book)
                        <option class="text-xl p-2">{{ $book['judul_buku'] }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="flex md:flex-row flex-col gap-10 mb-8">
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <label class="font-semibold text-2xl">Nama Siswa</label>
                    <input type="text" name="nama" id="nama" placeholder="Silahkan isi nama"
                        class="border-2 border-black w-full p-4 rounded-lg text-xl" required>
                </div>
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <label class="font-semibold text-2xl">Kelas</label>
                    <input type="text" name="kelas" id="kelas" placeholder="Silahkan isi kelas"
                        class="border-2 border-black w-full p-4 rounded-lg text-xl" required>
                </div>
            </div>
            <div class="flex md:flex-row flex-col gap-10 mb-32">
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <label class="font-semibold text-2xl">Tanggal Peminjaman</label>
                    <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman"
                        class="border-2 border-black w-full p-4 rounded-lg text-xl" placeholder="DD/MM/YY" required>
                </div>
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <label class="font-semibold text-2xl">Tanggal Pengembalian</label>
                    <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian"
                        class="border-2 border-black w-full p-4 rounded-lg text-xl" placeholder="DD/MM/YY" required>
                </div>
            </div>
            <div class="w-full">
                <button type="submit"
                    class="flex w-full justify-center items-center py-4 bg-button rounded-lg hover:bg-hoverbt transition hover:ease-in-out">
                    <p class="text-2xl text-white font-semibold">Pinjam</p>
                </button>
            </div>
        </form>
    </div>
@endsection
