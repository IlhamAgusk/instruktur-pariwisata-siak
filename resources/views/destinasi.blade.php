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

        <form action="{{ route('destinasi') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="cari" class="form-control"
                       placeholder="Cari nama destinasi..." value="{{ $keyword ?? '' }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        <div class="row g-4">
            @forelse ($destinasiList as $destinasi)
                @php
                    $jamSekarang = date('H:i:s');
                    $statusList = ($jamSekarang >= $destinasi->jam_buka && $jamSekarang < $destinasi->jam_tutup)
                        ? 'Sedang Buka' : 'Sudah Tutup';
                @endphp
                <div class="col-md-4">
                    <div class="destinasi-card-full">
                        <div class="destinasi-img-wrap">
                            <img src="{{ asset('images/' . $destinasi->gambar) }}" alt="Foto {{ $destinasi->nama }}">
                            <span class="status-badge {{ $statusList == 'Sedang Buka' ? 'status-buka' : 'status-tutup' }}">
                                {{ $statusList }}
                            </span>
                        </div>
                        <div class="destinasi-body">
                            <h3>{{ $destinasi->nama }}</h3>
                            <p>{{ Str::limit($destinasi->deskripsi, 100) }}</p>
                            <a href="{{ route('destinasi.detail', $destinasi->id) }}" class="btn-cta">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Belum ada destinasi yang ditambahkan.</p>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $destinasiList->appends(['cari' => $keyword])->links() }}
        </div>
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