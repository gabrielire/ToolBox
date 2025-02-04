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
            <div class="w-full md:w-1/2">
                <div class="relative w-full">
                    <img id="mainImage" src="{{ asset('img/b.png') }}" class="w-full h-80 object-cover rounded-lg">
                    <div class="absolute inset-0 flex items-center justify-between px-4">
                        <button onclick="prevImage()" class="bg-gray-800 text-white p-2 rounded-full">
                            &#10094;
                        </button>
                        <button onclick="nextImage()" class="bg-gray-800 text-white p-2 rounded-full">
                            &#10095;
                        </button>
                    </div>
                </div>

                <!-- Thumbnail -->
                <div class="flex mt-4 space-x-2 justify-center">
                    <img src="{{ asset('img/b.png') }}" class="thumbnail w-16 h-16 object-cover rounded cursor-pointer border-2 border-yellow-500" onclick="changeImage(0)">
                    <img src="{{ asset('img/b.png') }}" class="thumbnail w-16 h-16 object-cover rounded cursor-pointer border-2" onclick="changeImage(1)">
                    <img src="{{ asset('img/b.png') }}" class="thumbnail w-16 h-16 object-cover rounded cursor-pointer border-2" onclick="changeImage(2)">
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

<script>
    const images = [
        "{{ asset('img/b.png') }}",
        "{{ asset('img/b.png') }}",
        "{{ asset('img/b.png') }}"
    ];
    let currentIndex = 0;
    
    function changeImage(index) {
        currentIndex = index;
        document.getElementById("mainImage").src = images[currentIndex];

        // Update border on thumbnails
        document.querySelectorAll(".thumbnail").forEach((img, idx) => {
            img.classList.toggle("border-yellow-500", idx === currentIndex);
        });
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        changeImage(currentIndex);
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        changeImage(currentIndex);
    }
</script>
@endsection
