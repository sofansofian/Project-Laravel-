<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Berita</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="color: #ED9700;">Tambah Data Berita</h5>
                        <form action="{{ route('postInputBerita') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Judul Berita</label>
                                <input type="text" class="form-control form-control" name="judulBerita" required value="{{ old('judulBerita') }}">
                                <span class="text-danger">
                                    @error('judulBerita')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Isi Berita</label>
                                <textarea class="form-control" name="isiBerita" placeholder="Tulis isi berita disini...." style="height: 250px" required value="{{ old('isiBerita') }}"></textarea>
                                <span class="text-danger">
                                    @error('isiBerita')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Foto Berita</label>
                                <input class="form-control" type="file" name="foto">
                                <div class="form-text">Maksimal ukuran gambar berita 5MB</div>
                            </div>
                            <button type="submit" class="btn text-light mt-5" style="background-color: #ED9700;">Tambah Data Berita</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
