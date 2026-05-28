@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>
            <i class="bi bi-book"></i>
            Daftar Buku
        </h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Buku
        </a>
    </div>

    {{-- Statistik Cards --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Total Buku</h6>
                            <h2 class="mb-0">{{ $totalBuku }}</h2>
                        </div>
                        <div class="text-primary">
                            <i class="bi bi-book-fill" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-success">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Buku Tersedia</h6>
                            <h2 class="mb-0">{{ $bukuTersedia }}</h2>
                        </div>
                        <div class="text-success">
                            <i class="bi bi-check-circle-fill" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-danger">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted mb-1">Buku Habis</h6>
                            <h2 class="mb-0">{{ $bukuHabis }}</h2>
                        </div>
                        <div class="text-danger">
                            <i class="bi bi-x-circle-fill" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Search & Filter Buku Advanced --}}
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <i class="bi bi-search"></i>
            Search & Filter Buku
        </div>

        <div class="card-body">

            <form action="{{ route('buku.search') }}" method="GET">

                <div class="row">

                    <div class="col-md-3">
                        <label class="form-label">Keyword</label>
                        <input type="text" name="keyword" class="form-control" placeholder="Judul, Pengarang, Penerbit">
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Kategori</label>

                        <select name="kategori" class="form-select">
                            <option value="">Semua Kategori</option>
                            <option value="Programming">Programming</option>
                            <option value="Database">Database</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Networking">Networking</option>
                            <option value="Data Science">Data Science</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Tahun</label>

                        <select name="tahun" class="form-select">
                            <option value="">Semua</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Ketersediaan</label>

                        <select name="ketersediaan" class="form-select">
                            <option value="">Semua</option>
                            <option value="tersedia">Tersedia</option>
                            <option value="habis">Habis</option>
                        </select>
                    </div>

                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary w-100">

                            <i class="bi bi-search"></i>
                            Cari
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>

    {{-- Daftar Buku --}}
    @forelse ($bukus as $buku)
        <x-buku-card :buku="$buku" />
    @empty
        <div class="alert alert-info">
            <i class="bi bi-info-circle"></i>
            Tidak ada data buku
            @isset($kategori)
                dengan kategori <strong>{{ $kategori }}</strong>
            @endisset
        </div>
    @endforelse

    @if ($bukus->count() > 0)
        <div class="text-center mt-4">
            <p class="text-muted">
                Menampilkan {{ $bukus->count() }} buku
                @isset($kategori)
                    dari kategori <strong>{{ $kategori }}</strong>
                @endisset
            </p>
        </div>
    @endif
@endsection