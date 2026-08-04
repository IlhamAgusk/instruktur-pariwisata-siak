@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">

            <nav class="breadcrumb-custom mb-4">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span>/</span>
                <a href="{{ route('user') }}">User</a>
                <span>/</span>
                <span>Tambah User</span>
            </nav>

            <div class="admin-card">
                <h2 class="admin-card-title">Tambah User Baru</h2>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="mb-4">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn-cta">Simpan User</button>
                        <a href="{{ route('user') }}" class="btn-outline-detail">Batal</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection