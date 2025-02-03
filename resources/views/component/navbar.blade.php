<<nav id="navbar" class="navbar bg-yellow-500 fixed top-0 left-0 w-full flex justify-between items-center p-4 shadow-lg">
    <div class="flex space-x-4 gap-5 ml-56 font-bold items-center">
        <a href="/welcome#hero" id="nav-beranda" class="active">Beranda</a>
        <a href="/welcome#produk" id="nav-produk">Produk</a>
        <a href="/keranjang" id="nav-keranjang">Keranjang</a>
        <a href="#" id="nav-masuk">Masuk</a>
    </div>
    </nav>
    <script>
        function setActiveNav() {
            const path = window.location.pathname;
            const hash = window.location.hash;

            document.querySelectorAll(".navbar a").forEach(link => link.classList.remove("active"));

            if (path === "/welcome" && hash === "#produk") {
                document.getElementById("nav-produk").classList.add("active");
            } else if (path === "/keranjang") {
                document.getElementById("nav-keranjang").classList.add("active");
            } else if (path === "/masuk") {
                document.getElementById("nav-masuk").classList.add("active");
            } else {
                document.getElementById("nav-beranda").classList.add("active");
            }
        }

        window.addEventListener("load", setActiveNav);
        window.addEventListener("hashchange", setActiveNav);

        let navbar = document.getElementById("navbar");
        
        window.addEventListener("scroll", function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.style.top = "-80px";
            } else {
                navbar.style.top = "0";
            }
            lastScrollTop = scrollTop;
        });
            let lastScrollTop = 0;
        window.onload = function() {
            navbar.style.top = "0";
            updateActiveLink();
        };
        </script>