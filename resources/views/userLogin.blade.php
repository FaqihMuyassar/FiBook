@extends('components.main')

@section('content')
    <div class="w-full h-full">
        <div class="w-1/2 mx-auto shadow-2xl my-32 rounded-3xl">
            <div class="flex items-center justify-between px-12 py-12">
                <h1 class="font-bold text-3xl text-test">Silahkan Login</h1>
                <a href="/" class="text-lg text-gray-500">kembali</a>
            </div>
            <form action="">
                <div class=" flex flex-col gap-6 px-12 pb-24">
                    <div class="mb-16 flex flex-col gap-8">
                        <label class="input input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="h-4 w-4 opacity-70">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                            </svg>
                            <input type="text" class="grow text-xl" placeholder="Username" />
                        </label>
                        <label class="input input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="h-4 w-4 opacity-70">
                                <path fill-rule="evenodd"
                                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input type="password" class="grow text-xl" value="" placeholder="Password" />
                        </label>
                    </div>
                    <a href="/user"
                        class="text-center bg-button p-4 rounded-xl hover:bg-hoverbt hover:ease-in-out transition">
                        <p class="text-2xl text-white font-semibold">Login</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
