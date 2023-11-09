<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
    
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
                        <a href="{{ route('logout') }}" style=" text-decoration: none">
                            <p class="nav-link fw-semibold" style="color: #060355;">Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h4 class="text-secondary">Selamat Datang {{ Auth::user()->name }}</h4>
            </div>
            <div class="col-6">
                <form action="" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="search" class="form-control me-2" placeholder="Cari Nama Buku" aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-secondary">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-3"> 
        @foreach ($data as $buku)
            <div class="card mb-4 table table-bordered border-white" style="background-color: whitesmoke;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <img style="width: 150px" src="{{ asset('images/' . $buku->gambar) }}" alt="cover buku">
                        </div>
                        <div class="col-2" style="color: #060355;">
                            <p class="fw-bold">Judul</p>
                            <p class="fw-bold">Penulis</p>
                            <p class="fw-bold">Penerbit</p>
                            <p class="fw-bold">Tahun Terbit</p>
                            <p class="fw-bold">Deskripsi Buku</p>
                        </div>
                        <div class="col-8">
                            <p>{{ $buku->judul_buku }}</p>
                            <p>{{ $buku->penulis }}</p>
                            <p>{{ $buku->penerbit }}</p>
                            <p>{{ $buku->tahun_terbit }}</p>
                            <p>{{ $buku->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $data->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
