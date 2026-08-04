@extends('layouts.app')

@section('title', 'Edit ' . $user->name)

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <nav class="breadcrumb-custom mb-4">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span>/</span>
                <a href="{{ route('user') }}">User</a>
                <span>/</span>
                <span>Edit {{ $user->name }}</span>
            </nav>

            <div class="admin-card">
                <h2 class="admin-card-title">Edit User</h2>

                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ $user->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{ $user->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <div class="form-text">Kosongkan kalau tidak ingin mengubah password.</div>
                    </div>

                    <div class="mb-4">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn-cta">Simpan Perubahan</button>
                        <a href="{{ route('user') }}" class="btn-outline-detail">Batal</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection