<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toolbox.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .navbar {
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             z-index: 50; 
             transition: top 0.3s;
        }
        .navbar a.active {
             background-color: black;
             color: white;
             padding: 10px 15px;
             border-radius: 5px;
        }   
    </style>
</head>
<body class="bg-black text-white">
    <<nav id="navbar" class="navbar bg-yellow-500 fixed top-0 left-0 w-full flex justify-between items-center p-4 shadow-lg">
    <div class="flex space-x-4 gap-5 ml-56 font-bold items-center">
        <a href="#" id="nav-beranda" class="active">Beranda</a>
        <a href="#produk" id="nav-produk">Produk</a>
        <a href="#keranjang" id="nav-keranjang">Keranjang</a>
        <a href="#" id="nav-masuk">Masuk</a>
    </div>
    </nav>
    
    <section class="relative text-center py-20 bg-[url('img/t.png')] bg-no-repeat bg-center bg-cover h-screen overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 max-w-4xl mx-auto flex items-center ">
            <div>
                <h1 class="text-6xl font-bold">Tool<span class="text-yellow-500">box.id</span></h1>
                <h2 class="text-lg mt-4">Pusat Perkakas Terlengkap</h2>
                <button onclick="scrollToProduk()" class="mt-6 bg-yellow-500 text-black font-bold py-3 px-6 rounded-lg">Lihat Sekarang</button>
            </div>
            <img src="img/a.png" class="ml-10">
        </div>
    </section>
    
    <section id="produk" class="py-20 bg-white flex">
        <aside class="w-1/4 bg-stone-300 p-6 rounded-lg text-center">
            <h3 class="text-xl text-black font-bold mb-4">Kategori</h3>
            <ul>
                <li class="mb-2"><a href="#" class="text-yellow-500 font-extrabold">Semua</a></li>
                <li class="mb-2"><a href="#" class="text-black font-bold">Peralatan Tangan</a></li>
                <li class="mb-2"><a href="#" class="text-black font-bold">Peralatan Listrik</a></li>
                <li class="mb-2"><a href="#" class="text-black font-bold">Aksesoris</a></li>
            </ul>
        </aside>
        <div class="container mx-auto px-6 w-3/4">
            <h2 class="text-4xl text-black font-bold text-center mb-10">Produk</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-stone-300 text-black p-4 rounded-lg shadow-lg">
                    <img src="img/b.png" class="w-full h-48 object-cover">
                    <h3 class="text-lg font-normal mt-4 text-center truncate">Kunci Pas Ring Uk.8mm</h3>
                    <p class="text-black font-extrabold text-center">Rp. 16.000</p>
                    <button class="mt-3 w-full bg-yellow-500 text-black font-bold py-2 rounded">Tambah</button>
                </div>
                <div class="bg-stone-300 text-black p-4 rounded-lg shadow-lg">
                    <img src="img/b.png" class="w-full h-48 object-cover">
                    <h3 class="text-lg font-normal mt-4 truncate text-center">Obeng Plus</h3>
                    <p class="text-black font-extrabold text-center">Rp. 12.000</p>
                    <button class="mt-3 w-full bg-yellow-500 text-black font-bold py-2 rounded">Tambah</button>
                </div>
                <div class="bg-stone-300 text-black p-4 rounded-lg shadow-lg">
                    <img src="img/b.png" class="w-full h-48 object-cover">
                    <h3 class="text-lg font-normal mt-4 truncate text-center">Tang Kombinasi</h3>
                    <p class="text-black font-extrabold text-center">Rp. 25.000</p>
                    <button class="mt-3 w-full bg-yellow-500 text-black font-bold py-2 rounded">Tambah</button>
                </div>
                <div class="bg-stone-300 text-black p-4 rounded-lg shadow-lg">
                    <img src="img/b.png" class="w-full h-48 object-cover">
                    <h3 class="text-lg font-normal mt-4 truncate text-center">Tang Kombinasi</h3>
                    <p class="text-black font-extrabold text-center">Rp. 25.000</p>
                    <button class="mt-3 w-full bg-yellow-500 text-black font-bold py-2 rounded">Tambah</button>
                </div>
                <div class="bg-stone-300 text-black p-4 rounded-lg shadow-lg">
                    <img src="img/b.png" class="w-full h-48 object-cover">
                    <h3 class="text-lg font-normal mt-4 truncate text-center">Tang Kombinasi</h3>
                    <p class="text-black font-extrabold text-center">Rp. 25.000</p>
                    <button class="mt-3 w-full bg-yellow-500 text-black font-bold py-2 rounded">Tambah</button>
                </div>
            </div>
        </div>
    </section>
    
    <section id="keranjang" class="bg-gray-800 py-10 text-center">
        <h2 class="text-3xl font-bold mb-4">Keranjang</h2>
        <p class="text-lg">Belum ada item di keranjang.</p>
    </section>
    
    <script>
        function scrollToProduk() {
            document.getElementById('produk').scrollIntoView({ behavior: 'smooth' });
        }

        let lastScrollTop = 0;
        let navbar = document.getElementById("navbar");

        window.addEventListener("scroll", function() {
        let navbar = document.getElementById("navbar");
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            navbar.style.top = "-80px"; 
        } else {
            navbar.style.top = "0"; 
        }
        lastScrollTop = scrollTop;
        let produkSection = document.getElementById("produk").offsetTop - 100;
        let keranjangSection = document.getElementById("keranjang").offsetTop - 100;
        window.addEventListener("scroll", function() {
});

        document.querySelectorAll(".navbar a").forEach(link => link.classList.remove("active"));

        if (scrollTop >= produkSection && scrollTop < keranjangSection) {
        document.getElementById("nav-produk").classList.add("active");
        } 
        else {
        document.getElementById("nav-beranda").classList.add("active");
        }
        window.onload = function() {
    navbar.style.top = "0";
};
    });
    </script>
</body>
</html>
