<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kabupaten Siak - Wisata')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Topbar -->
    <div class="topbar">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="topbar-info">
                <span><i class="bi bi-envelope"></i> info@wisatasiak.id</span>
                <span class="topbar-divider">&#9670;</span>
                <span><i class="bi bi-telephone"></i> 0812-3456-7890</span>
            </div>
            <div class="topbar-social">
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Navbar utama -->
    <nav class="navbar navbar-expand-lg main-navbar" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand-custom" href="{{ route('beranda') }}">
                <span class="brand-mark">Siak</span><span class="brand-sub">WISATA</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link-custom {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-custom {{ request()->routeIs('destinasi') ? 'active' : '' }}" href="{{ route('destinasi') }}">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-custom {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-custom {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn-cta" href="{{ route('destinasi') }}">Rencanakan Kunjungan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if (session('success'))
        <div class="container mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @yield('content')

    <footer class="site-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a href="{{ route('beranda') }}" class="footer-brand">
                        <span class="brand-mark">Siak</span><span class="brand-sub">WISATA</span>
                    </a>
                    <p class="footer-desc">Menyajikan keindahan alam, budaya, dan kuliner khas daerah untuk setiap perjalanan wisata Anda.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a href="{{ route('beranda') }}">Beranda</a></li>
                        <li><a href="{{ route('destinasi') }}">Destinasi</a></li>
                        <li><a href="#tentang">Tentang</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-8">
                    <h4>Hubungi Kami</h4>
                    <p><i class="bi bi-geo-alt"></i> Jl. Sultan Syarif Kasim, Siak Sri Indrapura, Riau</p>
                    <p><i class="bi bi-envelope"></i> info@wisatasiak.id</p>
                    <p><i class="bi bi-whatsapp"></i> 0812-3456-7890</p>
                </div>
            </div>
        </div>

        <p class="footer-copy">&copy; {{ date('Y') }} Siak Wisata. Dibuat untuk keperluan pelatihan pemrograman web pariwisata.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>