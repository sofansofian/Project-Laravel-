<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<title>Edit Data</title>
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
<a href="{{ route('admin.home') }}">
<i class="bi-arrow-left h3"></i>
</a>
<div class="container mt-3">
@if (Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" style="color: #FFFFFF; background-color:#ED9700;" role="alert">
<strong>Berhasil!</strong> {{ Session::get('success') }}
<button type="button" class="btn-close bg-warning" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (Session::get('failed'))
<div class="alert alert-danger alert-dismissible fade show" style="color: #FFFFFF; background-color:#ED9700;" role="alert">
<strong>Gagal!</strong> {{ Session::get('success') }}
<button type="button" class="btn-close bg-warning" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
</div>
<div class="row">
<div class="col d-flex justify-content-center">
<div class="card mt-4" style="width: 800px">
<div class="card-body">
<h5 class="card-title text-center">Edit Data</h5>
<form action="/postEditAdmin/{{ $data->id }}" method="POST">
@csrf
<div class="form-group mt-4">
<label class="text-secondary mb-2">Nama Admin</label>
<input type="text" class="form-control border border-secondary form-control" name="name" required value="{{ $data->name }}">
<span class="text-danger">
@error('name')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary mb-2">Email Admin</label>
<input type="email" class="form-control border border-secondary form-control" name="email" required value="{{ $data->email }}">
<span class="text-danger">
@error('email')
{{ $message }}
@enderror
</span>
</div><br>
<div class="form-group mt-1">
<label class="text-secondary">Pilih Jenis Kelamin</label><br>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki" @if ($data->jenis_kelamin == 'Laki-laki') checked @endif>
<label class="form-check-label" for="inlineRadio1">Laki-laki</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan" @if ($data->jenis_kelamin == 'Perempuan') checked @endif>
<label class="form-check-label" for="inlineRadio2">Perempuan</label>
</div>
</div>
<button type="submit" class="btn text-light mt-5" style="background-color: #ED9700;">Edit Data Admin</button>
</form>
</div>
</div>
</div>
</div><br><br><br><br>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
