<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.mi
n.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<title>Login</title>
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

<div class="container mt-3">
        <a href="{{ route('logout') }}">
            <i class="bi-arrow-left h3"></i>
        </a>
</div>
<div class="container mt-3">
    @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Login Gagal!</strong> {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>

<div class="container d-flex justify-content-center align-itemscenter" style="margin-top: 60px">
<div class="card" style="width: 35%">
<div class="card-body p-4">
<h3 class="card-title text-center fw-semibold" style="color: #ED9700;">Login</h3>
<form action="{{ route('postLogin') }}" method="POST">
@csrf
<div class="form-group mt-4">
<label class="text-secondary">Email Anda</label>
<input type="email" class="form-control border border-warning form-control-lg" name="email"><span class="text-danger">
@error('email')
{{ $message }}
@enderror
</span>
<br>
</div>
<div class="form-group mt-1">
<label class="text-secondary">Password Anda</label>
<input type="password" class="form-control border border-warning form-control-lg" name="password"><span class="text-danger">
@error('password')
{{ $message }}
@enderror
</span>
</div>
<button type="submit" class=" form-control text-light
mt-5" style="background-color: #ED9700;">Login</button>
</form>
<p class="mt-2 text-center">Belum punya akun? <a href="{{ route('auth.register') }}" style="color : #ED9700; text-decoration: none">daftar</a>
</div>
</div>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bund
le.min.js"></script>
</body>
</html>
