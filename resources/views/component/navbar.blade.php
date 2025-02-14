<nav id="navbar" class="navbar bg-yellow-500 fixed top-0 left-0 w-full flex justify-between items-center p-4 shadow-lg transition-all duration-300">
    <div class="flex space-x-4 gap-5 ml-56 font-bold items-center">
        <a href="/#hero" id="nav-beranda" class="active">Beranda</a>
        <a href="/#produk" id="nav-produk">Produk</a>
        <a href="/keranjang" id="nav-keranjang">Keranjang</a>
        <a href="/masuk" id="nav-masuk">Masuk</a>
    </div>
</nav>

<script>
    let lastScrollTop = 0;
    let navbar = document.getElementById("navbar");

    function setActiveNav() {
        const path = window.location.pathname;
        const hash = window.location.hash;

        document.querySelectorAll(".navbar a").forEach(link => link.classList.remove("active"));

        if (path === "/keranjang") {
            document.getElementById("nav-keranjang").classList.add("active");
        } else if (path === "/detail") {
            document.getElementById("nav-produk").classList.add("active");
        } else if (path === "/masuk") {
            document.getElementById("nav-masuk").classList.add("active");
        } else if (path === "/daftar") {
            document.getElementById("nav-masuk").classList.add("active");
        } else if (path === "/checkout") {
            document.getElementById("nav-keranjang").classList.add("active");
        } else {
            document.getElementById("nav-beranda").classList.add("active");
        }
    }

    function updateActiveLinkOnScroll() {
        let scrollTop = window.scrollY;
        let heroSection = document.getElementById("hero").offsetTop;
        let produkSection = document.getElementById("produk").offsetTop - 100;

        document.querySelectorAll(".navbar a").forEach(link => link.classList.remove("active"));

        if (scrollTop >= produkSection) {
            document.getElementById("nav-produk").classList.add("active");
        } else {
            document.getElementById("nav-beranda").classList.add("active");
        }
    }

    function handleNavbarScroll() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            navbar.style.top = "-80px"; 
        } else {
            navbar.style.top = "0"; 
        }
        lastScrollTop = scrollTop;
    }

    window.addEventListener("load", setActiveNav);
    window.addEventListener("hashchange", setActiveNav);
    window.addEventListener("scroll", () => {
        updateActiveLinkOnScroll();
        handleNavbarScroll();
    });

    window.onload = function () {
        navbar.style.top = "0";
        setActiveNav();
    };
</script>
