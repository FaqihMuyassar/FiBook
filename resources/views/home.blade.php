@extends('components.main')

@section('content')

    <div class="w-full h-full">
        <div class="w-1/2 mx-auto shadow-2xl my-32 rounded-3xl">
            <h1 class="text-center text-4xl font-bold text-test pt-12 pb-6">Selamat Datang</h1>
            <p class="text-center text-2xl pb-24">Silahkan Pilih Masuk Sebagai Siswa atau Admin</p>
            <div class=" flex flex-col gap-6 px-12 pb-32">
                <a href="/user-login" class="text-center bg-button p-4 rounded-2xl hover:bg-hoverbt hover:ease-in-out transition">
                    <p class="text-2xl text-white font-semibold">Siswa</p>
                </a>
                <a href="/admin-login" class="text-center bg-button p-4 rounded-2xl hover:bg-hoverbt hover:ease-in-out transition">
                    <p class="text-2xl text-white font-semibold">Admin</p>
                </a>
            </div>
        </div>
    </div>

@endsection
