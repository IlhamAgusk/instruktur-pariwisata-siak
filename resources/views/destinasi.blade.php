@extends('layouts.app')

@section('title', 'Kabupaten Siak - Destinasi')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">&#9670; Jelajahi Siak</span>
        <h1 class="page-header-title">Destinasi Wisata</h1>
        <p class="page-header-desc">Bermacam-macam destinasi yang siap memanjakan setiap perjalanan Anda di Kabupaten Siak.</p>
        <nav class="breadcrumb-custom">
            <a href="{{ route('beranda') }}">Beranda</a>
            <span>/</span>
            <span>Destinasi</span>
        </nav>
    </div>
</section>

<!-- Grid Destinasi -->
<section class="destinasi">
    <div class="container">

        <!-- Search Box -->
        <div class="search-box-wrap">
            <form action="{{ route('destinasi') }}" method="GET" class="search-box">
                <i class="bi bi-search search-box-icon"></i>
                <input type="text" name="cari" class="search-box-input"
                    placeholder="Cari nama destinasi, mis. Istana Siak" value="{{ $keyword ?? '' }}">
                <button type="submit" class="search-box-btn">Cari</button>
            </form>

            @if (!empty($keyword))
                <div class="search-result-info">
                    Menampilkan hasil untuk <strong>"{{ $keyword }}"</strong>
                    <a href="{{ route('destinasi') }}" class="search-reset">
                        <i class="bi bi-x-circle"></i> Reset
                    </a>
                </div>
            @endif
        </div>
        
        <!-- Slider Destinasi (1 per tampilan) -->
<div class="destinasi-slider">
    @forelse ($destinasiList as $destinasi)
        @php
            $jamSekarang = date('H:i:s');
            $statusList = ($jamSekarang >= $destinasi->jam_buka && $jamSekarang < $destinasi->jam_tutup)
                ? 'Sedang Buka' : 'Sudah Tutup';
        @endphp
        <div class="destinasi-slide">
            <div class="destinasi-slide-img">
                <img src="{{ asset('images/' . $destinasi->gambar) }}" alt="Foto {{ $destinasi->nama }}">
                <span class="status-badge {{ $statusList == 'Sedang Buka' ? 'status-buka' : 'status-tutup' }}">
                    {{ $statusList }}
                </span>
            </div>
            <div class="destinasi-slide-body">
                <span class="slide-index">Destinasi {{ $destinasiList->currentPage() }} dari {{ $destinasiList->lastPage() }}</span>
                <h3>{{ $destinasi->nama }}</h3>
                <p>{{ Str::limit($destinasi->deskripsi, 220) }}</p>
                <a href="{{ route('destinasi.detail', $destinasi->id) }}" class="btn-cta">Lihat Selengkapnya</a>
            </div>
        </div>
    @empty
        <div class="destinasi-slide-empty">
            <i class="bi bi-emoji-frown"></i>
            <p>Belum ada destinasi yang ditemukan.</p>
        </div>
    @endforelse
</div>

<!-- Navigasi Slider -->
@if ($destinasiList->total() > 0)
<div class="slider-nav">
    @if ($destinasiList->onFirstPage())
        <span class="slider-btn slider-btn-disabled"><i class="bi bi-chevron-left"></i></span>
    @else
        <a href="{{ $destinasiList->appends(['cari' => $keyword])->previousPageUrl() }}" class="slider-btn">
            <i class="bi bi-chevron-left"></i>
        </a>
    @endif

    <div class="slider-dots">
        @for ($i = 1; $i <= $destinasiList->lastPage(); $i++)
            <a href="{{ $destinasiList->appends(['cari' => $keyword, 'page' => $i])->url($i) }}"
               class="slider-dot {{ $i == $destinasiList->currentPage() ? 'active' : '' }}"></a>
        @endfor
    </div>

    @if ($destinasiList->hasMorePages())
        <a href="{{ $destinasiList->appends(['cari' => $keyword])->nextPageUrl() }}" class="slider-btn">
            <i class="bi bi-chevron-right"></i>
        </a>
    @else
        <span class="slider-btn slider-btn-disabled"><i class="bi bi-chevron-right"></i></span>
    @endif
</div>
@endif

    </div>
</section>

<!-- Highlight / Keunggulan -->
<section class="keunggulan">
    <div class="container">
        <div class="text-center section-heading">
            <span class="section-eyebrow">&#9670; Kenapa Berkunjung</span>
            <h2 class="section-title">Keunggulan Wisata Kami</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="keunggulan-item">
                    <i class="bi bi-signpost-2"></i>
                    <h5>Akses Mudah</h5>
                    <p>Jalur menuju lokasi sudah baik dan terjangkau.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="keunggulan-item">
                    <i class="bi bi-person-badge"></i>
                    <h5>Pemandu Lokal</h5>
                    <p>Dipandu warga setempat yang berpengalaman.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="keunggulan-item">
                    <i class="bi bi-shield-check"></i>
                    <h5>Aman & Nyaman</h5>
                    <p>Fasilitas terjaga demi kenyamanan wisatawan.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="keunggulan-item">
                    <i class="bi bi-cup-hot"></i>
                    <h5>Kuliner Khas</h5>
                    <p>Cita rasa autentik di sekitar lokasi wisata.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Penutup -->
<section class="cta-penutup">
    <div class="container text-center">
        <h2>Siap Merencanakan Kunjungan Anda?</h2>
        <p>Hubungi kami untuk informasi lebih lanjut seputar destinasi wisata di Kabupaten Siak.</p>
        <a href="{{ route('beranda') }}#kontak" class="btn-outline-hero-dark">Hubungi Kami</a>
    </div>
</section>

@endsection