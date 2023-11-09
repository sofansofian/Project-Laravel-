<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<title>Tambah Data</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
<div class="container" style="margin-top: auto">
        <img src="{{ asset('image/99.png') }}" width="38" height="36" class="d-inline-block align-text-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <h7 class="fw-semibold"style="color: #4B5981;">Budak polbeng</h7>
                    </li>
                </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <a href="{{ route('admin.peminjaman') }}" class="btn btn-outline-warning mb-3">
        <i class="bi-arrow-left"></i> Kembali
    </a>

    <div class="card" style="width: 800px; margin: 0 auto;">
        <div class="card-body">
            <h5 class="card-title text-center">Detail Peminjaman</h5>

            @if($detailPeminjaman)
                <div class="text-center">
                    <img class="rounded mt-5 mb-5" style="width: 200px" src="{{ asset('images/' . $detailPeminjaman->gambar) }}" alt="cover buku">
                </div>

                <div class="row text-center">
                    <div class="col-12">
                    <input class="form-control mb-3 text-center" type="text" value="Judul Buku : {{ $detailPeminjaman->judul_buku }}" disabled readonly>

                        <input class="form-control mb-3 text-center" type="text" value="ID Peminjaman : {{ $detailPeminjaman->id }}" disabled readonly>
                        <input class="form-control mb-3 text-center" type="text" value="Tanggal Peminjaman : {{ $detailPeminjaman->tanggal_pinjam }}" disabled readonly>
                        <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        <input class="form-control mb-3 text-center" type="text" value="Penulis : {{ $detailPeminjaman->penulis }}" disabled readonly>
                        <input class="form-control mb-3 text-center" type="text" value="Penerbit : {{ $detailPeminjaman->penerbit }}" disabled readonly>
                        <input class="form-control mb-3 text-center" type="text" value="Tahun Terbit : {{ $detailPeminjaman->tahun_terbit }}" disabled readonly>
                        <!-- Dan seterusnya sesuai kebutuhan -->

                    </div>
                </div>
            @else
                <div class="alert alert-danger text-center">Data tidak ditemukan</div>
            @endif
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
