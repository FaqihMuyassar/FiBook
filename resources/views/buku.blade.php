@extends('components.main')

@section('content')
    <div class="flex w-full">
        <div class="bg-admin w-1/5 h-full py-16 px-20 flex flex-col justify-between gap-[565px]">
                <ul class="flex flex-col gap-8">
                    <li class="font-bold text-2xl text-button hover:text-hoverbt transition hover:ease-in-out"><a href="/dashboard">Peminjaman</a></li>
                    <li class="font-bold text-3xl text-hoverbt"><a href="">List Buku</a></li>
                </ul>
                <div class="dropdown dropdown-right dropdown-end flex justify-center items-center gap-4">
                    <img src="./img/profile.png" alt="">
                    <div tabindex="0" role="button" class="hover:text-hoverbt transition hover:ease-in-out m-1 w-full border-none shadow-none text-2xl font-bold text-button text-start">Admin</div>
                    <ul tabindex="0" class="dropdown-content menu rounded-box z-[1] w-52 p-2 shadow bg-white">
                      <li><a href="/" class="text-xl font-semibold text-red-600">Logout</a></li>
                    </ul>
                </div>
        </div>
        <div class="w-4/5">
            <div class="container mx-auto p-16">
                <div class="flex justify-between items-center mb-12">
                    <h1 class="text-3xl font-bold text-test">List Buku</h1>
                    <a href="/tambah" class="bg-button rounded-lg px-6 py-2 hover:bg-hoverbt transition hover:ease-in-out">
                        <p class="font-semibold text-lg text-white">Tambah</p>
                    </a>
                </div>
                <table class="min-w-full bg-white shadow-md rounded my-6">
                    <thead>
                        <tr>
                            <th class="py-3 px-4 border-b text-xl">No</th>
                            <th class="py-3 px-4 border-b text-xl">Judul Buku</th>
                            <th class="py-3 px-4 border-b text-xl">Jenis</th>
                            <th class="py-3 px-4 border-b text-xl">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $i => $book)
                        <tr class="">
                            <td class="py-3 px-4 border-b text-xl text-center">{{ $i+1 }}</td>
                            <td class="py-3 px-4 border-b text-xl text-center">{{ $book['judul_buku'] }}</td>
                            <td class="py-3 px-4 border-b text-xl text-center">{{ $book['jenis_buku'] }}</td>
                            <td class="py-3 px-4 border-b text-xl text-center">
                                <div class="flex gap-2 justify-center">
                                    <a href="/edit-buku?id={{ $book->id }}" class="bg-yellow-500 text-white px-2 py-1 rounded transition hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 transition hover:bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
