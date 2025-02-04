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
<body>
    @include('component.navbar')
    @yield('content')
    @yield('keranjang')
</body>
</html>