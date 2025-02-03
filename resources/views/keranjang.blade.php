@extends('layout.app')
@section('keranjang')
    <section id="keranjang" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Keranjang</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="border-b pb-4 mb-4">
                    <div class="flex items-center space-x-4">
                        <img src="img/b.png" alt="Kunci Pas Ring Uk. 8mm" class="w-16 h-16 object-cover">
                        <span class="flex-1">Kunci Pas Ring Uk. 8mm</span>
                        <div class="flex items-center">
                            <button class="border px-2 py-1">-</button>
                            <span class="mx-2">3</span>
                            <button class="border px-2 py-1">+</button>
                        </div>
                        <span class="font-semibold">Rp. 48.000</span>
                    </div>
                </div>
                <button class="w-full bg-gray-200 py-2 text-center rounded mt-4">+ Tambah Barang</button>
            </div>
            <div class="mt-6 text-center">
                <button class="bg-black text-white px-6 py-3 rounded-lg">Beli Sekarang</button>
            </div>
        </div>
    </section>
</body>
@endsection