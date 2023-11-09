<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage Admin</title>
    <style>
        body {
            background-image: url("{{ asset('image/90.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
        background-color: rgba(255, 255, 255, 0.7);
        }
    .table {
    border-radius: 10px; 
    }


    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm"> <!-- Menggunakan kelas shadow-sm -->
    <div class="container" style="margin-top: auto">
        <img src="{{ asset('image/99.png') }}" width="38" height="36" class="d-inline-block align-text-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="margin-top: 5px">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="{{ route('admin.home') }}"style="color: #060355;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.buku') }}"style="color: #060355;">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.peminjaman') }}" style="color: #060355;">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dosen') }}" style="color: #060355;">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.berita') }}" style="color: #060355;">Berita</a>
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


    <div class="container mt-3">
        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
   
    <div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <form action="{{ route('admin.home') }}" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="form-control me-2" placeholder="Cari Nama Admin" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-secondary">search</button>
                </div>
            </form>
        </div>
        <div class="col-2 ms-auto">
            <a class="btn text-light" href="{{ route('admin.tambah') }}" style="background-color:#ED9700; text-decoration: none;">Tambah Data +</a>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row mt-4">
        <table class="table table-striped table-bordered" style="border: #ED9700;">
            <thead style=" color: #ED9700;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $userAdmin)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $userAdmin->name }}</td>
                        <td>{{ $userAdmin->email }}</td>
                        <td>{{ $userAdmin->jenis_kelamin }}</td>
                        <td>{{ $userAdmin->level }}</td>
                        <td class="justify-content-center">
                            <a class="btn btn-outline-secondary btn-sm3" href="/editAdmin/{{ $userAdmin->id }}">Edit</a>
                            <a class="btn btn-outline-danger btn-sm3" href="/deleteAdmin/{{ $userAdmin->id }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $data->links() }}
</div>


    

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Input Berita
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Ayo Lakukan Input Berita</h5>
                    <p>Dengan menekan tombol berikut ini</p>
                    <a href="{{ route('admin.inputBerita') }}" class="btn text-light" style="background-color: #ED9700;">Input Berita</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Input Dosen
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Ayo Lakukan Input Dosen</h5>
                    <p>Dengan menekan tombol berikut ini</p>
                    <a href="{{ route('admin.inputDosen') }}" class="btn text-light" style="background-color:#ED9700 ;">Input Dosen</a>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light text-secondary ">
        <div class="container" style="margin-top: auto">
            <a href="http://polbeng.ac.id/" target="_blank">
                <img src="{{ asset('image/polbeng.png') }}" width="30" height="30" class="d-inline-block align-text-top" alt="Logo" style="margin-bottom: 60px; margin-top: 60px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 50px; margin-top: 60px; margin-bottom: 60px;">
                <ul class="navbar-nav ms-auto">
                <div class="d-flex">
    <div class="feature-item" style="margin-left:60px; ">
        <i class="fa fa-cogs"></i> 
        <h1 style="font-weight: bold; font-size: 1em;">Politeknik Negeri Bengkalis</h1>
        <p>
    <a href="https://polbeng.siakadcloud.com/gate/login" class="text-secondary link-effect" target="_blank">Siacad Politeknik Negeri Bengkalis</a> 
    <br>
    <a href="https://www.instagram.com/polbengofficial/" class="text-secondary link-effect" target="_blank">Instagramnya Polbeng</a><br>
    <a href="https://www.youtube.com/@PolbengOfficial" class="text-secondary link-effect" target="_blank">Nonton YouTube</a>
</p>
       
<style>
    .link-effect {
        text-decoration: none;
        position: relative;
        color: #000;
        transition: color 0.3s;
    }

    .link-effect::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 100%;
        background-color: #FF5733;
        height: 2px;
        transition: right 0.3s;
    }

    .link-effect:hover::after {
        right: 0;
    }

    .link-effect:active {
        color: #ED9700; /* Ubah warna teks ketika ditekan */
    }
</style>


    </div>
    <div class="d-flex">
    <div class="feature-item" style="margin-left:60px;">
        <i class="fa fa-cogs"></i> 
        <h3 style="font-weight: bold; font-size: 1em;">Jurusan & Prodi Polbeng</h1>
       
        <p>
    <a href="https://ti.polbeng.ac.id/prodi/profil/RPL.html" class="text-secondary link-effect" target="_blank">Jurusan Teknik Informatika</a> 
    <br>
    <a href="http://www.polbeng.ac.id/official/jurusan-teknik-informatika" class="text-secondary link-effect" target="_blank">Prodi Rekayasa Perangkat Lunak</a>
</p>

<style>
    .link-effect {
        text-decoration: none;
        position: relative;
        color: #000;
        transition: color 0.3s;
    }

    .link-effect::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 100%;
        background-color: #FF5733;
        height: 2px;
        transition: right 0.3s;
    }

    .link-effect:hover::after {
        right: 0;
    }

    .link-effect:active {
        color: #ED9700; /* Ubah warna teks ketika ditekan */
    }
</style>


    </div>
</div>
    <div class="feature-item" style="margin-left:60px;">
        <i class="fa fa-cogs"></i> 
        <h3 style="font-weight: bold; font-size: 1em;">Media Promosi</h1>
        <p>
    <a href="https://www.instagram.com/rpl.polbeng/" class="text-secondary link-effect" target="_blank">Rpl Angkatan 21</a> 
    <br>
    <a href="https://www.instagram.com/rpla.agense/" class="text-secondary link-effect" target="_blank">Agense</a>
</p>

<style>
    .link-effect {
        text-decoration: none;
        position: relative;
        color: #000;
        transition: color 0.3s;
    }

    .link-effect::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 100%;
        background-color: #FF5733;
        height: 2px;
        transition: right 0.3s;
    }

    .link-effect:hover::after {
        right: 0;
    }

    .link-effect:active {
        color: #ED9700; /* Ubah warna teks ketika ditekan */
    }
</style>
    </div>
    <div class="d-flex flex-row">
    <div class="feature-item" style="margin-left:60px;">
        <i class="fa fa-cogs"></i> 
        <h1 style="font-weight: bold; font-size: 1em;">Web Design</h1>
        <p>
    <a href="https://www.instagram.com/sfnsoo/" class="text-secondary link-effect" target="_blank">Sofan sofian</a> <br>
    <a href="https://api.whatsapp.com/send?phone=081250329327" class="text-secondary link-effect" target="_blank">Hubungi</a> 

</p>

<style>
    .link-effect {
        text-decoration: none;
        position: relative;
        color: #000;
        transition: color 0.3s;
    }

    .link-effect::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        right: 100%;
        background-color: #FF5733;
        height: 2px;
        transition: right 0.3s;
    }

    .link-effect:hover::after {
        right: 0;
    }

    .link-effect:active {
        color: #ED9700; /* Ubah warna teks ketika ditekan */
    }
</style>
    </div>
    </div>
                </ul>
            </div>
        </div>
    </nav>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
