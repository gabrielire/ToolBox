@extends('layout.app')
@section('detail')
<div class="min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-4 py-10">
        
        <!-- Tombol Kembali -->
        <div class="mb-6">
            <a href="/welcome#produk" class="text-black font-bold flex items-center">
                &#10094; Kembali
            </a>
        </div>

        <div class="flex flex-col md:flex-row gap-10 max-w-4xl mx-auto">
            <!-- Carousel Gambar -->
            <div x-data="{ activeImage: 0, images: ['img/b.png', 'b.png', 'b.png'] }" class="w-full md:w-1/2">
                <div class="relative w-full">
                    <img :src="images[activeImage]" class="w-full h-80 object-cover rounded-lg">
                    <div class="absolute inset-0 flex items-center justify-between px-4">
                        <button @click="activeImage = (activeImage > 0) ? activeImage - 1 : images.length - 1" 
                            class="bg-gray-800 text-white p-2 rounded-full">
                            &#10094;
                        </button>
                        <button @click="activeImage = (activeImage < images.length - 1) ? activeImage + 1 : 0" 
                            class="bg-gray-800 text-white p-2 rounded-full">
                            &#10095;
                        </button>
                    </div>
                </div>

                <!-- Thumbnail -->
                <div class="flex mt-4 space-x-2 justify-center">
                    <template x-for="(image, index) in images">
                        <img :src="image" class="w-16 h-16 object-cover rounded cursor-pointer border-2"
                            :class="{'border-yellow-500': activeImage === index}" 
                            @click="activeImage = index">
                    </template>
                </div>
            </div>

            <!-- Detail Produk -->
            <div class="w-full md:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Sherlock Kunci Pas Ring (PRO-J series) uk. 6 mm</h2>
                <p class="text-yellow-500 font-bold text-3xl mt-4 text-center">Rp12.500</p>

                <div class="flex items-center space-x-1 mt-3 justify-center">
                    <span class="text-gray-500">★★★★★</span>
                    <span class="text-gray-500">(4.5)</span>
                </div>

                <div class="flex items-center mt-6 justify-center">
                    <button class="border px-4 py-2 text-lg">-</button>
                    <span class="px-6 text-lg">1</span>
                    <button class="border px-4 py-2 text-lg">+</button>
                </div>

                <button class="w-full bg-yellow-500 text-black font-bold py-4 mt-6 rounded-lg text-lg">
                    Tambah Ke Keranjang
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
