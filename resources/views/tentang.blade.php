@extends('layouts.app')

@section('title', 'Kabupaten Siak - Tentang')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">&#9670; Profil Daerah</span>
        <h1 class="page-header-title">Tentang Kabupaten Siak</h1>
        <p class="page-header-desc">Mengenal lebih dekat sejarah, budaya, dan kekayaan wisata Kabupaten Siak.</p>
        <nav class="breadcrumb-custom">
            <a href="{{ route('beranda') }}">Beranda</a>
            <span>/</span>
            <span>Tentang</span>
        </nav>
    </div>
</section>

<!-- Sejarah Singkat -->
<section class="sejarah">
    <div class="container">
        <div class="tentang-grid">
            <div class="tentang-visual">
                <img src="{{ asset('images/hero-bg.jpg') }}" alt="Istana Siak Sri Indrapura" class="tentang-img">
                <div class="tentang-badge">
                    <i class="bi bi-award"></i>
                    <span>Warisan Melayu</span>
                </div>
            </div>

            <div class="tentang-text">
                <span class="section-eyebrow">&#9670; Sejarah</span>
                <h2 class="section-title">Jejak Kesultanan Siak</h2>
                <p class="tentang-desc">Kabupaten Siak tidak lepas dari sejarah Kesultanan Siak Sri Indrapura, salah satu kerajaan Melayu Islam terbesar di Sumatra. Istana Siak Sri Indrapura yang berdiri megah hingga kini menjadi saksi kejayaan masa lalu, memadukan arsitektur Melayu, Arab, dan Eropa dalam satu bangunan bersejarah.</p>
                <p class="tentang-desc">Warisan budaya ini terus dijaga dan menjadi identitas daerah, sekaligus daya tarik utama bagi wisatawan yang ingin menyelami sejarah dan budaya Melayu secara langsung.</p>
            </div>
        </div>
    </div>
</section>

<!-- Profil / Statistik Daerah -->
<section class="profil-daerah">
    <div class="container">
        <div class="text-center section-heading">
            <span class="section-eyebrow">&#9670; Profil Wilayah</span>
            <h2 class="section-title">Kabupaten Siak dalam Angka</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="profil-item">
                    <span class="profil-number">8.556 km&sup2;</span>
                    <span class="profil-label">Luas Wilayah</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="profil-item">
                    <span class="profil-number">14</span>
                    <span class="profil-label">Kecamatan</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="profil-item">
                    <span class="profil-number">400.000+</span>
                    <span class="profil-label">Jumlah Penduduk</span>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="profil-item">
                    <span class="profil-number">200+</span>
                    <span class="profil-label">Tahun Sejarah</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Keunggulan Wisata -->
<section class="visi-wisata">
    <div class="container">
        <div class="text-center section-heading">
            <span class="section-eyebrow">&#9670; Mengapa Siak</span>
            <h2 class="section-title">Keunggulan Wisata Kabupaten Siak</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="visi-item">
                    <i class="bi bi-tree"></i>
                    <h4>Wisata Alam</h4>
                    <p>Air terjun, sungai, dan pantai yang masih asri, menawarkan ketenangan jauh dari hiruk-pikuk kota.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="visi-item">
                    <i class="bi bi-bank"></i>
                    <h4>Sejarah & Budaya</h4>
                    <p>Istana Siak Sri Indrapura dan warisan Kesultanan Melayu yang masih terjaga hingga kini.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="visi-item">
                    <i class="bi bi-cup-hot"></i>
                    <h4>Kuliner Khas</h4>
                    <p>Cita rasa autentik Melayu yang diwariskan turun-temurun, siap memanjakan lidah wisatawan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Budaya & Tradisi -->
<section class="budaya">
    <div class="container">
        <div class="tentang-grid budaya-grid">
            <div class="tentang-text">
                <span class="section-eyebrow">&#9670; Budaya</span>
                <h2 class="section-title">Warisan Budaya Melayu</h2>
                <p class="tentang-desc">Masyarakat Siak masih memegang teguh adat dan tradisi Melayu, tercermin dari bahasa, pakaian adat, hingga perhelatan budaya seperti Tour de Siak dan pacu jalur yang rutin digelar setiap tahun.</p>
                <p class="tentang-desc">Kearifan lokal ini menjadi bagian tak terpisahkan dari pengalaman berwisata di Siak, memberi nuansa autentik yang sulit ditemukan di tempat lain.</p>
            </div>

            <div class="tentang-visual">
                <img src="{{ asset('images/tarian-melayu.jpg') }}" alt="Budaya Melayu Siak" class="tentang-img">
                <div class="tentang-badge">
                    <i class="bi bi-flag"></i>
                    <span>Tradisi Turun-Temurun</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Penutup -->
<section class="cta-penutup">
    <div class="container text-center">
        <h2>Tertarik Menjelajahi Kabupaten Siak?</h2>
        <p>Lihat destinasi wisata unggulan kami dan rencanakan kunjungan Anda sekarang.</p>
        <a href="{{ route('destinasi') }}" class="btn-outline-hero-dark">Lihat Destinasi</a>
    </div>
</section>

@endsection