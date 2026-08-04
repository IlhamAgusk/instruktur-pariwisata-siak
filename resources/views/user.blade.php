@extends('layouts.app')

@section('title', 'Daftar User')

@section('content')
<div class="container py-5">

    <nav class="breadcrumb-custom">
        <a href="{{ route('beranda') }}">Beranda</a>
        <span>/</span>
        <span>User</span>
    </nav>

    <div class="admin-header">
        <div>
            <span class="section-eyebrow">&#9670; Manajemen Akun</span>
            <h2 class="admin-header-title">Daftar User</h2>
        </div>
        <a href="{{ route('user.create') }}" class="btn-cta">
            <i class="bi bi-plus-lg"></i> Tambah User
        </a>
    </div>

    <div class="table-wrap-custom">
        <div class="table-responsive">
            <table class="table-custom">
                <colgroup>
                    <col style="width: 26%;">
                    <col style="width: 32%;">
                    <col style="width: 15%;">
                    <col style="width: 27%;">
                </colgroup>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th class="text-center" style="width: 200px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($userList as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="role-badge {{ $user->role == 'admin' ? 'role-badge-admin' : 'role-badge-user' }}">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </td>
                            <td>
                                <div class="table-actions">
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn-table btn-table-edit">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus {{ $user->name }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-table btn-table-delete">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="table-empty-row">
                            <td colspan="4">
                                <i class="bi bi-people" style="font-size: 26px; color: var(--c-gold); display: block; margin-bottom: 8px;"></i>
                                Belum ada user yang ditambahkan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection