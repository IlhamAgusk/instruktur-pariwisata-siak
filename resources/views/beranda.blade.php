<?php
    date_default_timezone_set("Asia/Jakarta");
    $namaDaerah = "Kabupaten Siak";

    $jamSekarang = date("H");
        if ($jamSekarang < 10) {
            $ucapan = "Selamat Pagi";
        } elseif ($jamSekarang < 15) {
            $ucapan = "Selamat Siang";
        } elseif ($jamSekarang < 18) {
            $ucapan = "Selamat Sore";
        } else {
            $ucapan = "Selamat Malam";
        }

    // Destinasi 1: Air Terjun Contoh (08.00 - 17.00)
    if ($jamSekarang >= 8 && $jamSekarang < 17) {
        $status1 = "Sedang Buka";
    } else {
        $status1 = "Sudah Tutup";
    }

    // Destinasi 2: Istana Bersejarah (09.00 - 16.00)
    if ($jamSekarang >= 9 && $jamSekarang < 16) {
        $status2 = "Sedang Buka";
    } else {
        $status2 = "Sudah Tutup";
    }

    // Destinasi 3: Pantai Contoh Indah (06.00 - 18.00)
    if ($jamSekarang >= 6 && $jamSekarang < 18) {
        $status3 = "Sedang Buka";
    } else {
        $status3 = "Sudah Tutup";
    }
?>

@extends('layouts.app')

@section('title', 'Kabupaten Siak - Beranda')

@section('content')

    <section class="hero-siak" style="background-image: url('{{ asset('images/tentang.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="hero-pattern"></div>

        <div class="container">
            <div class="hero-grid">
                <div class="hero-text">
                    <span class="hero-eyebrow">&#9670; <?php echo $ucapan; ?>, Selamat Datang</span>
                    <h1 class="hero-title"><?php echo $namaDaerah; ?></h1>
                    <p class="hero-desc">Temukan keindahan alam, budaya, dan kuliner khas daerah kami yang siap memanjakan setiap perjalanan Anda.</p>

                    <div class="hero-tags">
                        <span class="hero-tag">Air Terjun</span>
                        <span class="hero-tag">Istana Bersejarah</span>
                        <span class="hero-tag">Pantai Indah</span>
                    </div>

                    <div class="hero-actions">
                        <a href="{{ route('destinasi') }}" class="btn-cta">Jelajahi Destinasi</a>
                        <a href="#tentang" class="btn-outline-hero">Tentang Kami</a>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="hero-feature-card">
                        <i class="bi bi-tree"></i>
                        <div>
                            <h4>Wisata Alam</h4>
                            <p>Air terjun & pantai yang masih asri</p>
                        </div>
                    </div>
                    <div class="hero-feature-card">
                        <i class="bi bi-bank"></i>
                        <div>
                            <h4>Sejarah & Budaya</h4>
                            <p>Istana dan warisan Melayu</p>
                        </div>
                    </div>
                    <div class="hero-feature-card">
                        <i class="bi bi-cup-hot"></i>
                        <div>
                            <h4>Kuliner Khas</h4>
                            <p>Cita rasa autentik daerah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#tentang" class="hero-scroll" aria-label="Gulir ke bawah">
            <i class="bi bi-chevron-down"></i>
        </a>
    </section>

    <section class="tentang" id="tentang">
        <div class="container">
            <div class="tentang-grid">
                <div class="tentang-visual">
                    <img src="{{ asset('images/hero-bg.jpg') }}" alt="Pemandangan Kabupaten Siak" class="tentang-img">
                    <div class="tentang-badge">
                        <i class="bi bi-award"></i>
                        <span>Warisan Melayu</span>
                    </div>
                </div>

                <div class="tentang-text">
                    <span class="section-eyebrow">&#9670; Profil Daerah</span>
                    <h2 class="section-title">Tentang Kabupaten Siak</h2>
                    <p class="tentang-desc">Daerah ini dikenal dengan keindahan alamnya yang masih asri, dipadukan dengan kekayaan budaya lokal yang diwariskan turun-temurun. Berbagai destinasi wisata alam, sejarah, dan kuliner siap menyambut setiap wisatawan yang berkunjung.</p>

                    <div class="tentang-stats">
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Destinasi Wisata</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">200+</span>
                            <span class="stat-label">Tahun Sejarah</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">14</span>
                            <span class="stat-label">Kecamatan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="destinasi">
        <div class="container">
            <div class="text-center section-heading">
                <span class="section-eyebrow">&#9670; Rekomendasi Kami</span>
                <h2 class="section-title">Destinasi Unggulan</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="destinasi-card">
                        <a href="{{ route('destinasi') }}"><img src="{{ asset('images/air-terjun.jpg') }}" alt="Foto Air Terjun Contoh"></a>
                        <span class="status-badge <?php echo $status1 == 'Sedang Buka' ? 'status-buka' : 'status-tutup'; ?>">
                            <?php echo $status1; ?>
                        </span>
                        <div class="destinasi-overlay">
                            <h3>Air Terjun</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="destinasi-card">
                        <a href="{{ route('destinasi') }}"><img src="{{ asset('images/istana-bersejarah.jpg') }}" alt="Foto Istana Bersejarah"></a>
                        <span class="status-badge <?php echo $status2 == 'Sedang Buka' ? 'status-buka' : 'status-tutup'; ?>">
                            <?php echo $status2; ?>
                        </span>
                        <div class="destinasi-overlay">
                            <h3>Istana Bersejarah</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="destinasi-card">
                        <a href="{{ route('destinasi') }}"><img src="{{ asset('images/pantai.jpg') }}" alt="Foto Pantai Contoh Indah"></a>
                        <span class="status-badge <?php echo $status3 == 'Sedang Buka' ? 'status-buka' : 'status-tutup'; ?>">
                            <?php echo $status3; ?>
                        </span>
                        <div class="destinasi-overlay">
                            <h3>Pantai Indah</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="kontak" id="kontak">
        <div class="container">
            <div class="text-center section-heading">
                <span class="section-eyebrow">&#9670; Hubungi Kami</span>
                <h2 class="section-title">Ada Pertanyaan?</h2>
            </div>

            <div class="row g-0 kontak-card">
                <div class="col-lg-5 kontak-info">
                    <h3 class="kontak-info-title">Informasi Kontak</h3>
                    <p class="kontak-info-desc">Tim kami siap membantu menjawab pertanyaan seputar destinasi, akomodasi, dan agenda wisata di Kabupaten Siak.</p>

                    <div class="kontak-info-item">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <h5>Alamat</h5>
                            <p>Jl. Sultan Syarif Kasim, Siak Sri Indrapura, Riau</p>
                        </div>
                    </div>
                    <div class="kontak-info-item">
                        <i class="bi bi-telephone"></i>
                        <div>
                            <h5>Telepon</h5>
                            <p>0812-3456-7890</p>
                        </div>
                    </div>
                    <div class="kontak-info-item">
                        <i class="bi bi-envelope"></i>
                        <div>
                            <h5>Email</h5>
                            <p>info@wisatasiak.id</p>
                        </div>
                    </div>
                    <div class="kontak-info-item">
                        <i class="bi bi-clock"></i>
                        <div>
                            <h5>Jam Layanan</h5>
                            <p>Senin - Jumat, 08.00 - 16.00 WIB</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 kontak-form-wrap">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn-cta w-100 border-0">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection