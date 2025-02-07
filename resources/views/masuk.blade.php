@extends('layout.app')
@section('masuk')
<div class=" mx-auto bg-gray-200 p-8 rounded-lg shadow-lg w-[35rem] mt-40">
        <h2 class="text-center text-xl font-bold text-black mb-6">Masuk</h2>

        <form action="#" method="POST">
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="Melvin@gmail.com" 
                    class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Abcdefgh123"
                    class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>

            <!-- Link Daftar -->
            <p class="text-sm text-black">Belum punya akun? 
                <a href="/daftar" class="text-yellow-500 font-semibold">Daftar</a>
            </p>

            <!-- Tombol Masuk -->
            <button type="submit"
                class="mt-4 w-full bg-yellow-400 text-black font-semibold py-2 rounded-lg shadow hover:bg-yellow-500 transition">
                Masuk
            </button>
        </form>
    </div>
@endsection