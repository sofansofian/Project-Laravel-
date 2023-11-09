<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min
.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<title>Tambah Data</title>
<style>
        body {
            background-image: url("{{ asset('image/91.jpg') }}"); /* Ganti dengan nama dan path gambar yang Anda miliki */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

    </style>
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
<div class="container mt-3"style="margin-top :30px;">
        <a href="{{ route('admin.peminjaman') }}">
            <i class="bi-arrow-left h3"></i>
        </a>

<div class="container mt-3">
@if (Session::get('success'))
<div class="alert alert-success alert-dismissible fade show"  style="color: #FFFFFF; background-color:#ED9700;" role="alert">
<strong>Berhasil!</strong> {{ Session::get('success') 
}}
<button type="button" class="btn-close bg-warning" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (Session::get('failed'))
<div class="alert alert-danger alert-dismissible fade 
show" style="color: #FFFFFF; background-color:#ED9700;" role="alert">
<strong>Gagal!</strong> {{ Session::get('success') }}
<button type="button" class="btn-close bg-warning" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
</div>
<div class="row">
<div class="col d-flex justify-content-center">
<div class="card mt-4" style="width: 800px">
<div class="card-body">
<h5 class="card-title text-center fw-semibold" style="color: #ED9700;">Tambah Data</h5>
<form action="{{ route('postTambahPeminjaman') }}" method="POST">
@csrf 
<div class="form-group mt-4">
<label class="text-secondary mb-2">Nomor Anggota</label>
<input type="text" class="form-control 
border border-warning form-control"
name="idUser" required value="{{
old('idUser') }}">
<span class="text-danger">
@error('idUser')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">ID 
Buku</label>
<input type="text" class="form-control border border-warning form-control"
name="kodeBuku" required value="{{
old('kodeBuku') }}">
<span class="text-danger">
@error('kodeBuku')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Tanggal Peminjaman</label>
<input type="date" class="form-control 
border border-warning form-control"
name="tanggalPeminjaman" required
value="{{ old('tanggalPeminjaman') }}">
<span class="text-danger">
@error('tanggalPeminjaman')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Tanggal Pengembalian</label>
<input type="date" class="form-control 
border border-warning form-control"
name="tanggalPengembalian" required
value="{{ old('tanggalPengembalian') }}">
<span class="text-danger">
@error('tanggalPengembalian')
{{ $message }}
@enderror
</span>
</div>
<button type="submit" class="btn text-light
mt-5" style="background-color: #ED9700;">Tambah Data Peminjaman</button>
</form>
</div>
</div>
</div>
</div><br><br><br><br>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundl
e.min.js"></script>
</body>
</html>