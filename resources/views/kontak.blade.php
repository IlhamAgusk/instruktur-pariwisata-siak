@extends('layouts.app')

@section('title', 'Kabupaten Siak - Kontak')

@section('content')

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="section-eyebrow">&#9670; Hubungi Kami</span>
        <h1 class="page-header-title">Kontak</h1>
        <p class="page-header-desc">Ada pertanyaan seputar wisata Kabupaten Siak? Tim kami siap membantu.</p>
        <nav class="breadcrumb-custom">
            <a href="{{ route('beranda') }}">Beranda</a>
            <span>/</span>
            <span>Kontak</span>
        </nav>
    </div>
</section>

<!-- Form Kontak -->
<section class="kontak">
    <div class="container">
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