@extends('components.main')

@section('content')
<div class="flex">
    <div class="bg-admin w-1/5 h-full py-16 px-20 flex flex-col justify-between gap-[577px]">
        <ul class="flex flex-col gap-8">
            <li class="font-bold text-2xl text-button hover:text-hoverbt transition hover:ease-in-out"><a href="/dashboard">Peminjaman</a></li>
            <li class="font-bold text-3xl text-hoverbt"><a href="/buku">List Buku</a></li>
        </ul>
        <div class="flex gap-2 items-center">
            <img src="./img/profile.png" alt="" width="32">
            <a href="" class="text-2xl font-bold text-button">Admin</a>
        </div>
    </div>
    <div class="container mx-auto p-16">
        <h1 class="text-3xl font-bold mb-4 text-test">Tambah Buku</h1>
        <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-xl font-semibold mb-2">Judul Buku:</label>
                <input type="text" name="judul_buku" id="judul_buku" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-xl font-semibold mb-2">Jenis Buku:</label>
                <input type="text" name="jenis_buku" id="jenis_buku" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-button hover:bg-hoverbt text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
