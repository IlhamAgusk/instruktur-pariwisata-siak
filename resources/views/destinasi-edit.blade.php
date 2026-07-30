@extends('layouts.app')

@section('title', 'Edit ' . $destinasi->nama)

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <nav class="breadcrumb-custom mb-4">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span>/</span>
                <a href="{{ route('destinasi') }}">Destinasi</a>
                <span>/</span>
                <span>Edit {{ $destinasi->nama }}</span>
            </nav>

            <h2 class="section-title mb-4">Edit Destinasi</h2>

            <form action="{{ route('destinasi.update', $destinasi->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Destinasi</label>
                    <input type="text" name="nama" class="form-control" value="{{ $destinasi->nama }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required>{{ $destinasi->deskripsi }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama File Gambar</label>
                    <input type="text" name="gambar" class="form-control" value="{{ $destinasi->gambar }}" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jam Buka</label>
                        <input type="time" name="jam_buka" class="form-control" value="{{ $destinasi->jam_buka }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jam Tutup</label>
                        <input type="time" name="jam_tutup" class="form-control" value="{{ $destinasi->jam_tutup }}" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" value="{{ $destinasi->lokasi }}">
                </div>

                <button type="submit" class="btn-cta">Simpan Perubahan</button>
                <a href="{{ route('destinasi.detail', $destinasi->id) }}" class="btn-outline-detail">Batal</a>

            </form>

        </div>
    </div>
</div>
@endsection