@extends('layouts.app')

@section('title', 'Daftar Atraksi')

@section('content')
<div class="container py-5">

    <nav class="breadcrumb-custom">
        <a href="{{ route('beranda') }}">Beranda</a>
        <span>/</span>
        <span>Atraksi</span>
    </nav>

    <div class="admin-header">
        <div>
            <span class="section-eyebrow">&#9670; Manajemen Konten</span>
            <h2 class="admin-header-title">Daftar Atraksi Wisata</h2>
        </div>
        <a href="{{ route('atraksi.create') }}" class="btn-cta">
            <i class="bi bi-plus-lg"></i> Tambah Atraksi
        </a>
    </div>

    <div class="row g-4">
        @forelse ($atraksiList as $atraksi)
            @php
                $kategoriClass = match ($atraksi->kategori) {
                    'Budaya' => 'kategori-budaya',
                    'Kuliner' => 'kategori-kuliner',
                    default => 'kategori-alam',
                };
            @endphp
            <div class="col-md-4">
                <div class="atraksi-card">
                    <div class="atraksi-card-body">
                        <span class="kategori-badge {{ $kategoriClass }}">{{ $atraksi->kategori }}</span>
                        <h3 class="atraksi-card-title">{{ $atraksi->nama }}</h3>
                        <p class="atraksi-card-desc">{{ Str::limit($atraksi->deskripsi, 90) }}</p>
                        <p class="atraksi-card-price {{ $atraksi->harga == 0 ? 'gratis' : '' }}">
                            {{ $atraksi->harga == 0 ? 'Gratis' : 'Rp ' . number_format($atraksi->harga, 0, ',', '.') }}
                        </p>

                        <div class="atraksi-card-actions">
                            <a href="{{ route('atraksi.edit', $atraksi->id) }}" class="btn-table btn-table-edit">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('atraksi.destroy', $atraksi->id) }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus {{ $atraksi->nama }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-table btn-table-delete">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="atraksi-empty">
                    <i class="bi bi-stars"></i>
                    <p>Belum ada atraksi yang ditambahkan.</p>
                </div>
            </div>
        @endforelse
    </div>

</div>
@endsection