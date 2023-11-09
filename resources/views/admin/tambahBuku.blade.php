<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.c
ss">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<title>Tambah Data Buku</title>
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
<a href="{{ route('admin.buku') }}">
<i class="bi-arrow-left h3"></i>
</a>
<div class="container mt-3">
@if (Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" style="color: #FFFFFF; background-color:#ED9700;" role="alert">
<strong>Berhasil!</strong> {{ Session::get('success') 
}}
<button type="button" class="btn-close bg-warning" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (Session::get('failed'))
<div class="alert alert-danger alert-dismissible fade show" style="color: #FFFFFF; background-color:#ED9700;"
role="alert">
<strong>Gagal!</strong> {{ Session::get('success') }}
<button type="button" class="btn-close bg-warning" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
</div>
<div class="row " style="margin-top: auto">
<div class="col d-flex justify-content-center">
<div class="card mt-4" style="width: 800px">
<div class="card-body">
<h5 class="card-title text-center" style="color: #ED9700;">Tambah Data 
Buku</h5>
<form action="{{ route('postTambahBuku') }}"
method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group mt-4">
<label class="text-secondary mb-2">Kode 
Buku</label>
<input type="text" class="form-control 
border border-warning form-control"
name="kodeBuku" required value="{{
old('kodeBuku') }}">
<span class="text-danger">
@error('kodeBuku')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Judul 
Buku</label>
<input type="text" class="form-control 
border border-warning form-control"
name="judulBuku" required value="{{
old('judulBuku') }}">
<span class="text-danger">
@error('judulBuku')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Penulis</label>
<input type="text" class="form-control 
border border-warning form-control"
name="penulis" required value="{{
old('penulis') }}">
<span class="text-danger">
@error('penulis')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Penerbit</label>
<input type="text" class="form-control 
border border-warning form-control"
name="penerbit" required value="{{
old('penerbit') }}">
<span class="text-danger">
@error('penerbit')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Tahun 
Terbit</label>
<input type="date" class="form-control 
border border-warning form-control"
name="tahunTerbit" required value="{{
old('tahunTerbit') }}">
<span class="text-danger">
@error('tahunTerbit')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Cover 
Buku</label>
<input class="form-control" type="file"
name="gambar">
<div class="form-text">Maksimal ukuran 
gambar cover buku 5MB
</div>
</div><br>
<div class="form-group mt-1 ">
<label class="text-secondary mb-2">Kategori 
Buku</label>
<select class="form-select" aria-label="Floating label select example" name="kategori">
<option value="Programmer"
selected>Programmer</option>
<option value="Sains">Sains</option>
<option value="Komik">Komik</option>
</select>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Comments</label>
<textarea class="form-control"
name="deskripsi" placeholder="Tulis deskripsi buku disini...."
style="height: 250px"
required value="{{ old('deskripsi') }}"></textarea>
</div>
<button type="submit" class="btn text-light
mt-5" style="background-color: #ED9700;">Tambah Data Buku</button>
</form>
</div>
</div>
</div>
</div><br><br><br><br>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.
min.js"></script>
</body>
</html>
