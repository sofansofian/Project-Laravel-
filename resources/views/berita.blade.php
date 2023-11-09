<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            background-image: url("{{ asset('image/90.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container" style="margin-top: auto">
            <a href="http://polbeng.ac.id/" target="_blank">
                <img src="{{ asset('image/99.png') }}" width="38" height="36" class="d-inline-block align-text-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 50px;">
                <ul class="navbar-nav ms-auto">
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi') }}" style="color: #060355;">Prodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold active" href="{{ route('berita') }}" style="color:#060355;">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}" style="color:#060355;">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('biodata') }}" style="color:#060355;">Biodata</a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" style=" text-decoration: none">
                            <p class="nav-link fw-semibold" style="color: #060355;">Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 content">
                <div class="text-center mb-4">
                    <h2 class="text-secondary">Selamat Datang!</h2>
                    <h5 class="text-secondary">Di halaman Web Sofan Sofian</h>
                </div>

                <div class="card mb-4">
                    <img src="{{ ('../image/4.jpg') }}" class="card-img-top" alt="Foto 1">
                    <div class="card-body">
                        <h5 class="card-title">Pemandangan di perawang</h5>
                        <p class="card-text">Deskripsi untuk foto pertama.</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <img src="{{ ('../image/6.jpg') }}" class="card-img-top" alt="Foto 2">
                    <div class="card-body">
                        <h5 class="card-title">Pemandangan di jakarta</h5>
                        <p class="card-text">Deskripsi untuk foto kedua.</p>
                    </div>
                </div>

                <div class="card mb-4">
                    <img src="{{ ('../image/7.jpg') }}" class="card-img-top" alt="Foto 3">
                    <div class="card-body">
                        <h5 class="card-title">Pemandangan di Riau</h5>
                        <p class="card-text">Deskripsi untuk foto ketiga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
