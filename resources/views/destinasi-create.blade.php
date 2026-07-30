@extends('layouts.app')

@section('title', 'Tambah Destinasi Baru')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <nav class="breadcrumb-custom mb-4">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span>/</span>
                <a href="{{ route('destinasi') }}">Destinasi</a>
                <span>/</span>
                <span>Tambah Destinasi</span>
            </nav>

            <h2 class="section-title mb-4">Tambah Destinasi Baru</h2>

            <form action="{{ route('destinasi.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Destinasi</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama File Gambar</label>
                    <input type="text" name="gambar" class="form-control" placeholder="contoh: istana-siak.jpg" required>
                    <small class="text-muted">Sementara isi nama file gambar yang sudah ada di folder public/images.</small>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jam Buka</label>
                        <input type="time" name="jam_buka" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jam Tutup</label>
                        <input type="time" name="jam_tutup" class="form-control" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" placeholder="contoh: Kecamatan Siak, Kabupaten Siak">
                </div>

                <button type="submit" class="btn-cta">Simpan Destinasi</button>
                <a href="{{ route('destinasi') }}" class="btn-outline-detail">Batal</a>

            </form>

        </div>
    </div>
</div>
@endsection