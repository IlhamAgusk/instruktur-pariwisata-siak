@extends('layouts.app')

@section('title', 'Edit ' . $atraksi->nama)

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <nav class="breadcrumb-custom mb-4">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span>/</span>
                <a href="{{ route('atraksi') }}">Atraksi</a>
                <span>/</span>
                <span>Edit {{ $atraksi->nama }}</span>
            </nav>

            <div class="admin-card">
                <h2 class="admin-card-title">Edit Atraksi</h2>

                <form action="{{ route('atraksi.update', $atraksi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="destinasi_id" class="form-label">Destinasi</label>
                        <select name="destinasi_id" id="destinasi_id" class="form-select @error('destinasi_id') is-invalid @enderror">
                            <option value="" disabled>-- Pilih Destinasi --</option>
                            @foreach ($destinasiList as $destinasi)
                                <option value="{{ $destinasi->id }}"
                                    {{ old('destinasi_id', $atraksi->destinasi_id) == $destinasi->id ? 'selected' : '' }}>
                                    {{ $destinasi->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('destinasi_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Atraksi</label>
                        <input type="text" name="nama" id="nama"
                               class="form-control @error('nama') is-invalid @enderror"
                               value="{{ old('nama', $atraksi->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4"
                                  class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $atraksi->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" id="kategori" class="form-select @error('kategori') is-invalid @enderror">
                            <option value="Budaya" {{ old('kategori', $atraksi->kategori) == 'Budaya' ? 'selected' : '' }}>Budaya</option>
                            <option value="Alam" {{ old('kategori', $atraksi->kategori) == 'Alam' ? 'selected' : '' }}>Alam</option>
                            <option value="Kuliner" {{ old('kategori', $atraksi->kategori) == 'Kuliner' ? 'selected' : '' }}>Kuliner</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga (Rp)</label>
                        <input type="number" name="harga" id="harga"
                               class="form-control @error('harga') is-invalid @enderror"
                               value="{{ old('harga', $atraksi->harga) }}">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="gambar" class="form-label">Nama File Gambar</label>
                        <input type="text" name="gambar" id="gambar"
                               class="form-control @error('gambar') is-invalid @enderror"
                               value="{{ old('gambar', $atraksi->gambar) }}">
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn-cta">Simpan Perubahan</button>
                        <a href="{{ route('atraksi') }}" class="btn-outline-detail">Batal</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection