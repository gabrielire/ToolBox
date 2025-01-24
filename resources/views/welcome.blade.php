<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toolbox.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    <nav class="bg-yellow-500 flex justify-between items-center p-4">
        <div class="flex space-x-4 gap-5 ml-56 items-center">
            <a href="#" class="bg-black text-white px-4 py-2 font-bold">Beranda</a>
            <a href="#" class="text-black font-bold">Produk</a>
            <a href="#" class="text-black font-bold">Keranjang</a>
            <a href="#" class="text-black font-bold">Masuk</a>
        </div>
    </nav>
    
    <section class="relative text-center py-20 bg-[url('{{ asset('img/t.png') }}')] bg-no-repeat bg-center bg-cover h-screen overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="relative z-10 max-w-4xl mx-auto flex items-center ">
            <div>
            <h1 class="text-6xl font-bold">Tool<span class="text-yellow-500">box.id</span></h1>
            <p class="text-lg mt-4">Pusat Perkakas Terlengkap</p>
            <button class="mt-6 bg-yellow-500 text-black font-bold py-3 px-6 rounded-lg">Lihat Sekarang</button>
            </div>
            <img src="{{ asset('img/a.png') }}">
        </div>
        </div>
    </section>
</body>
</html>
