@extends('layout.app')
@section('daftar')
<div class=" mx-auto bg-gray-200 p-8 rounded-lg shadow-lg w-[35rem] mt-40">
        <h2 class="text-center text-xl font-bold text-black mb-6">Daftar</h2>

        <form action="#" method="POST">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" placeholder="Melvin" 
                class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="mb-4">
                <label for="namap" class="block text-sm font-medium text-gray-700">Nama pertama</label>
                <input type="text" id="namap" name="namap" placeholder="Melvin" 
                class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="mb-4">
                <label for="namat" class="block text-sm font-medium text-gray-700">Nama terakhir</label>
                <input type="text" id="namat" name="namat" placeholder="Wiryawan" 
                class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="mb-4">
                <label for="no.telp" class="block text-sm font-medium text-gray-700">No. telp</label>
                <input type="text" id="no.telp" name="no.telp" placeholder="086732562752" 
                class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="mb-4">
                <label for="lahir" class="block text-sm font-medium text-gray-700">Tanggal lahir</label>
                <input type="text" id="lahir" name="lahir" placeholder="dd-mm-yyyy" 
                class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="Melvin@gmail.com" 
                    class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Abcdefgh123"
                    class="mt-1 w-full p-3 border rounded-lg bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>

            <p class="text-sm text-black">Sudah punya akun? 
                <a href="/masuk" class="text-yellow-500 font-semibold">Masuk</a>
            </p>

            <!-- Tombol Masuk -->
            <button type="submit"
                class="mt-4 w-full bg-yellow-400 text-black font-semibold py-2 rounded-lg shadow hover:bg-yellow-500 transition">
                Daftar
            </button>
        </form>
    </div>
@endsection