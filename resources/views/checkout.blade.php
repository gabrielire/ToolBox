@extends('layout.app')
@section('checkout')
<div class="pt-28"></div>
<div class="max-w-4xl w-full mx-auto bg-white p-6 rounded-lg shadow-md">
        <!-- Alamat Pengiriman -->
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-gray-700 font-semibold">Alamat Pengiriman</h2>

            <!-- Pilihan Alamat -->
            <div class="mt-3 space-y-2">
                <label class="flex items-start gap-3 cursor-pointer">
                    <input type="radio" name="alamat" checked class="mt-1">
                    <div>
                        <p class="text-gray-800 font-medium">Melvin</p>
                        <p class="text-gray-600 text-sm">Jl. Teluk Pacitan, Blimbing, Kota Malang</p>
                    </div>
                </label>
            </div>

            <!-- Checkbox untuk Menampilkan Form Tambah/Edit Alamat -->
            <div class="mt-4">
                <label for="toggleTambahAlamat" class="text-green-500 text-sm cursor-pointer">Tambah Alamat Baru</label>
                <input type="checkbox" id="toggleTambahAlamat" class="hidden peer">
                
                <!-- Form Tambah Alamat -->
                <div class="hidden peer-checked:block mt-3 p-4 border rounded bg-gray-50">
                    <h3 class="text-gray-700 font-medium">Tambah Alamat Baru</h3>
                    <input type="text" class="w-full mt-2 p-2 border rounded" placeholder="Nama Alamat (Rumah, Kantor, dll)">
                    <textarea class="w-full mt-2 p-2 border rounded" placeholder="Detail Alamat"></textarea>
                    <button class="mt-3 w-full bg-black text-white py-2 rounded">Simpan Alamat</button>
                </div>
            </div>

            <div class="mt-4">
                <label for="toggleEditAlamat" class="text-blue-500 text-sm cursor-pointer">Edit Alamat</label>
                <input type="checkbox" id="toggleEditAlamat" class="hidden peer">

                <!-- Form Edit Alamat -->
                <div class="hidden peer-checked:block mt-3 p-4 border rounded bg-gray-50">
                    <h3 class="text-gray-700 font-medium">Edit Alamat</h3>
                    <input type="text" class="w-full mt-2 p-2 border rounded" value="Melvin">
                    <textarea class="w-full mt-2 p-2 border rounded">Jl. Teluk Pacitan, Blimbing, Kota Malang</textarea>
                    <button class="mt-3 w-full bg-black text-white py-2 rounded">Simpan Perubahan</button>
                </div>
            </div>
        </div>

        <!-- Produk -->
        <div class="border-b pb-4 mb-4">
            <div class="flex items-center gap-4 mt-2">
                <img src="img/b.png" class="w-20 h-20 rounded">
                <div>
                    <p class="text-gray-700 font-medium">Kunci Pas Ring Uk. 8mm</p>
                    <p class="text-gray-900 font-bold">Rp48.000</p>
                    <div class="flex items-center mt-2">
                        <button class="bg-gray-200 px-2 py-1 rounded">-</button>
                        <span class="mx-2">3</span>
                        <button class="bg-gray-200 px-2 py-1 rounded">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ongkir & Asuransi -->
        <div class="border-b pb-4 mb-4">
            <div class="bg-gray-100 p-4 rounded-lg">
                <p class="text-gray-800 font-medium">Standart <span class="font-bold">(Rp4.000)</span></p>
                <p class="text-gray-600 text-sm">Estimasi tiba 10 - 16 Feb</p>
                <div class="flex items-center mt-2">
                    <input type="checkbox" checked class="mr-2">
                    <label class="text-sm text-gray-700">Dilindungi <a href="#" class="text-blue-500">Asuransi Pengiriman</a> (Rp6.600)</label>
                </div>
            </div>
        </div>

        <!-- Metode Pembayaran -->
        <div class="border-b pb-4 mb-4">
            <h3 class="text-gray-700 font-semibold">Metode Pembayaran</h3>
            <div class="mt-2">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="radio" name="payment" checked>
                    <span>BCA Virtual Account <span class="text-sm text-gray-500">Mudah & terverifikasi otomatis</span></span>
                </label>
                <label class="flex items-center gap-2 mt-2 cursor-pointer">
                    <input type="radio" name="payment">
                    <span>Mandiri Virtual Account <span class="text-sm text-gray-500">Tidak perlu upload bukti transfer</span></span>
                </label>
            </div>
            <button class="mt-4 bg-yellow-200 text-yellow-700 px-4 py-2 rounded-lg font-medium">Pakai promo biar makin hemat!</button>
        </div>

        <!-- Ringkasan Pembayaran -->
        <div>
            <h3 class="text-gray-700 font-semibold">Cek ringkasan transaksimu, yuk</h3>
            <div class="mt-2 text-gray-800">
                <p class="flex justify-between"><span>Total Harga (1 Barang)</span> <span>Rp48.000</span></p>
                <p class="flex justify-between"><span>Total Ongkos Kirim</span> <span>Rp4.000</span></p>
                <p class="flex justify-between"><span>Total Asuransi Pengiriman</span> <span>Rp6.600</span></p>
            </div>
            <div class="border-t mt-4 pt-4 font-bold text-gray-900 flex justify-between">
                <span>Total Tagihan</span> <span>Rp58.000</span>
            </div>
            <button class="mt-4 w-full bg-yellow-500 text-black py-3 rounded-lg font-bold text-lg">Bayar Sekarang</button>
        </div>
</div>
@endsection