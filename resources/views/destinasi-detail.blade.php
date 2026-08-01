@extends('layouts.app')

@section('title', $destinasi->nama . ' - Detail Destinasi')

@section('content')

<?php
    date_default_timezone_set("Asia/Jakarta");
    $jamSekarang = date('H:i:s');
    $statusDetail = ($jamSekarang >= $destinasi->jam_buka && $jamSekarang < $destinasi->jam_tutup) ? 'Sedang Buka' : 'Sudah Tutup';
?>

<!-- Hero Banner -->
<section class="detail-hero" style="background-image: url('{{ asset('images/' . $destinasi->gambar) }}');">
    <div class="detail-hero-overlay"></div>
    <div class="container detail-hero-content">
        <nav class="breadcrumb-custom breadcrumb-light">
            <a href="{{ route('beranda') }}">Beranda</a>
            <span>/</span>
            <a href="{{ route('destinasi') }}">Destinasi</a>
            <span>/</span>
            <span>{{ $destinasi->nama }}</span>
            <span>/</span>
            <form action="{{ route('destinasi.destroy', $destinasi->id) }}" method="POST"
                    class="mt-2"
                    onsubmit="return confirm('Yakin ingin menghapus {{ $destinasi->nama }}? Data yang dihapus tidak bisa dikembalikan.')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-outline-detail w-100">Hapus Destinasi</button>
            </form>
        </nav>
        <h1 class="detail-hero-title">{{ $destinasi->nama }}</h1>
        <span class="status-badge <?php echo $statusDetail == 'Sedang Buka' ? 'status-buka' : 'status-tutup'; ?>">
            {{ $statusDetail }}
        </span>
    </div>
</section>

<!-- Konten Detail -->
<section class="destinasi-detail">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <span class="section-eyebrow">&#9670; Tentang Destinasi</span>
                <h2 class="section-title">Deskripsi</h2>
                <p class="detail-desc">{{ $destinasi->deskripsi }}</p>

                <div class="detail-quote">
                    <i class="bi bi-quote"></i>
                    <p>Nikmati pengalaman berwisata yang autentik dan tak terlupakan di {{ $destinasi->nama }}.</p>
                </div>

                <div class="detail-fasilitas">
                    <span class="section-eyebrow">&#9670; Fasilitas Tersedia</span>
                    <h2 class="section-title">Fasilitas</h2>
                    <div class="row g-3">
                        <div class="col-6 col-md-4">
                            <div class="fasilitas-item"><i class="bi bi-p-circle"></i> Area Parkir</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="fasilitas-item"><i class="bi bi-house-door"></i> Toilet Umum</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="fasilitas-item"><i class="bi bi-moon-stars"></i> Mushola</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="fasilitas-item"><i class="bi bi-shop"></i> Warung/Kios</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="fasilitas-item"><i class="bi bi-wifi"></i> Area Wifi</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="fasilitas-item"><i class="bi bi-camera"></i> Spot Foto</div>
                        </div>
                    </div>
                </div>

                <div class="detail-peta">
                    <span class="section-eyebrow">&#9670; Lokasi</span>
                    <h2 class="section-title">Peta Lokasi</h2>
                    <div class="peta-wrap">
                        <iframe
                            src="https://www.google.com/maps?q={{ urlencode($destinasi->lokasi ?? $destinasi->nama . ' Siak') }}&output=embed"
                            allowfullscreen
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="detail-atraksi mt-5">
                    <span class="section-eyebrow">&#9670; Atraksi Tersedia</span>
                    <h2 class="section-title">Atraksi di Destinasi Ini</h2>

                    <div class="row g-3">
                        @forelse ($destinasi->atraksi as $atraksi)
                            <div class="col-md-4">
                                <div class="card h-100">
                                    <img src="{{ asset('images/' . $atraksi->gambar) }}" class="card-img-top" alt="{{ $atraksi->nama }}">
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $atraksi->nama }}</h6>
                                        <span class="badge bg-secondary">{{ $atraksi->kategori }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted">Belum ada atraksi untuk destinasi ini.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="detail-info-card">
                    <h4>Informasi Kunjungan</h4>

                    <div class="detail-info-item">
                        <i class="bi bi-clock"></i>
                        <div>
                            <h6>Jam Operasional</h6>
                            <p>{{ substr($destinasi->jam_buka, 0, 5) }} - {{ substr($destinasi->jam_tutup, 0, 5) }} WIB</p>
                        </div>
                    </div>

                    <div class="detail-info-item">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <h6>Lokasi</h6>
                            <p>{{ $destinasi->lokasi ?? 'Kabupaten Siak, Riau' }}</p>
                        </div>
                    </div>

                    <div class="detail-info-item">
                        <i class="bi bi-info-circle"></i>
                        <div>
                            <h6>Status</h6>
                            <p>{{ $statusDetail }}</p>
                        </div>
                    </div>

                    <a href="{{ route('kontak') }}" class="btn-cta w-100 text-center">Hubungi Kami</a>
                    <a href="{{ route('destinasi') }}" class="btn-outline-detail w-100 text-center">Kembali ke Destinasi</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Destinasi Terkait -->
<section class="terkait">
    <div class="container">
        <div class="text-center section-heading">
            <span class="section-eyebrow">&#9670; Jangan Lewatkan</span>
            <h2 class="section-title">Destinasi Lainnya</h2>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($destinasiTerkait as $item)
                <div class="col-md-5">
                    <div class="terkait-card">
                        <div class="terkait-img-wrap">
                            <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->nama }}">
                        </div>
                        <div class="terkait-body">
                            <h4>{{ $item->nama }}</h4>
                            <p>{{ Str::limit($item->deskripsi, 80) }}</p>
                            <a href="{{ route('destinasi.detail', $item->id) }}" class="terkait-link">
                                Lihat Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection