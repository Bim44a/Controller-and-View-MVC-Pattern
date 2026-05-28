@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h1 class="mb-4">Dashboard Perpustakaan</h1>

        <div class="row">

            <!-- Total Buku -->
            <div class="col-md-4 mb-3">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5>Total Buku</h5>
                        <h2>{{ $totalBuku }}</h2>
                    </div>
                </div>
            </div>

            <!-- Buku Tersedia -->
            <div class="col-md-4 mb-3">
                <div class="card border-success">
                    <div class="card-body">
                        <h5>Buku Tersedia</h5>
                        <h2>{{ $bukuTersedia }}</h2>
                    </div>
                </div>
            </div>

            <!-- Buku Habis -->
            <div class="col-md-4 mb-3">
                <div class="card border-danger">
                    <div class="card-body">
                        <h5>Buku Habis</h5>
                        <h2>{{ $bukuHabis }}</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <!-- Total Anggota -->
            <div class="col-md-4 mb-3">
                <div class="card border-info">
                    <div class="card-body">
                        <h5>Total Anggota</h5>
                        <h2>{{ $totalAnggota }}</h2>
                    </div>
                </div>
            </div>

            <!-- Anggota Aktif -->
            <div class="col-md-4 mb-3">
                <div class="card border-success">
                    <div class="card-body">
                        <h5>Anggota Aktif</h5>
                        <h2>{{ $anggotaAktif }}</h2>
                    </div>
                </div>
            </div>

            <!-- Anggota Nonaktif -->
            <div class="col-md-4 mb-3">
                <div class="card border-secondary">
                    <div class="card-body">
                        <h5>Anggota Nonaktif</h5>
                        <h2>{{ $anggotaNonaktif }}</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">

            <!-- Buku Terbaru -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        5 Buku Terbaru
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($bukuTerbaru as $buku)
                                <li class="list-group-item">
                                    {{ $buku->judul }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Anggota Terbaru -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        5 Anggota Terbaru
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($anggotaTerbaru as $anggota)
                                <li class="list-group-item">
                                    {{ $anggota->nama }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-4">
            <h4>Quick Links</h4>

            <a href="/buku" class="btn btn-primary me-2">
                Kelola Buku <i class="bi bi-arrow-right"></i>
            </a>

            <a href="/anggota" class="btn btn-success me-2">
                Kelola Anggota <i class="bi bi-arrow-right"></i>
            </a>

            <a href="/kategori" class="btn btn-warning">
                Kelola Kategori <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
@endsection