@extends('components.main')

@section('content')
    <div class="flex w-full h-full">
        <div class="bg-admin w-1/5 h-full py-16 px-20 flex flex-col justify-between gap-[565px]">
                <ul class="flex flex-col gap-8">
                    <li class="font-bold text-3xl text-hoverbt"><a href="">Peminjaman</a></li>
                    <li class="font-bold text-2xl text-button hover:text-hoverbt transition hover:ease-in-out"><a href="/buku">List Buku</a></li>
                </ul>
                <div class="dropdown dropdown-right dropdown-end flex justify-center items-center gap-4">
                    <img src="./img/profile.png" alt="">
                    <div tabindex="0" role="button" class="hover:text-hoverbt transition hover:ease-in-out m-1 w-full border-none shadow-none text-2xl font-bold text-button text-start">Admin</div>
                    <ul tabindex="0" class="dropdown-content menu rounded-box z-[1] w-52 p-2 shadow bg-white">
                      <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="text-xl font-semibold text-red-600">Logout</button></li>
                        </form>
                    </ul>
                </div>
        </div>
        <div class="w-4/5">
                <div class="container mx-auto p-16">
                    <h1 class="text-3xl font-bold mb-12 text-test">List Peminjam</h1>
                    <table class="min-w-full bg-white shadow-md rounded my-6">
                        <thead>
                            <tr>
                                <th class="py-3 px-4 border-b text-xl">Nama</th>
                                <th class="py-3 px-4 border-b text-xl">Kelas</th>
                                <th class="py-3 px-4 border-b text-xl">Judul Buku</th>
                                <th class="py-3 px-4 border-b text-xl">Tanggal Peminjaman</th>
                                <th class="py-3 px-4 border-b text-xl">Tanggal Pengembalian</th>
                                <th class="py-3 px-4 border-b text-xl">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrows as $borrow)
                            <tr class="">
                                <td class="py-3 px-4 border-b text-xl text-center">{{ $borrow['nama'] }}</td>
                                <td class="py-3 px-4 border-b text-xl text-center">{{ $borrow['kelas'] }}</td>
                                <td class="py-3 px-4 border-b text-xl text-center">{{ $borrow['judul_buku'] }}</td>
                                <td class="py-3 px-4 border-b text-xl text-center">{{ $borrow['tanggal_peminjaman'] }}</td>
                                <td class="py-3 px-4 border-b text-xl text-center">{{ $borrow['tanggal_pengembalian'] }}</td>
                                <td class="py-3 px-4 border-b text-xl text-center">
                                    <form action="{{ route('borrow.destroy', $borrow->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-green-500 transition hover:bg-green-600 text-white px-2 py-1 rounded">Done</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection
