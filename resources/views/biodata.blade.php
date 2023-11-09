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
        <div class="container">
            <a href="http://polbeng.ac.id/" target="_blank">
                <img src="{{ asset('image/99.png') }}" width="38" height="36" class="d-inline-block align-text-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> <!-- Mengubah ms-auto menjadi justify-content-end -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi') }}" style="color: #060355;">Prodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('berita') }}" style="color:#060355;">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}" style="color:#060355;">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold active" href="{{ route('biodata') }}" style="color:#060355;">Biodata</a>
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

    <section style="display: flex; margin-top: 60px;">
    <img src="{{ asset('image/77.png') }}" class="img-fluid" width="309" height="369" style="margin-left: 90px;">
    <div class="col-lg-8" style="color: #060355;">
        <div class="feature-item" style="margin-left:20px; margin-top: 50px;">
            <i class="fa fa-cogs"></i> 
            <h1 style="font-weight: 600; font-size: 2em;">Biodata Mahasiswa Rekayasa Perangkat Lunak</h1>
            <p>Politeknik Negeri Bengkalis Tahun Angkatan 2021</p>
    </div>
    <div class="d-flex">
    <div class="feature-item" style="margin-left:20px;">
        <i class="fa fa-cogs"></i> 
        <h1 style="font-weight: bold; font-size: 1em;">Sofan sofian</h1>
        <p>Jurusan Teknik Informatika
    <br>
Prodi Rekayasa Perangkat Lunak

    </div>
    <div class="d-flex">
    <div class="feature-item" style="margin-left:20px;">
        <i class="fa fa-cogs"></i> 
        <h3 style="font-weight: bold; font-size: 1em;">Asal Sekolah</h1>
        <p>SMA N 1 Tasik Puri Puyu <br> SMP N 1 Tasik putri puyu<br>SD N 14 Bandul  </p>
    </div>
</div>
    <div class="feature-item" style="margin-left:20px;">
        <i class="fa fa-cogs"></i> 
        <h3 style="font-weight: bold; font-size: 1em;">Alamat</h1>
        <p>Kab. Kepulauan Meranti <br> Kec. Tasik putri puyu<br>Desa Bandul  </p>
    </div>
    <div class="d-flex flex-row">
    <div class="feature-item" style="margin-left:20px;">
        <i class="fa fa-cogs"></i> 
        <h1 style="font-weight: bold; font-size: 1em;">Skill</h1>
        <p>UI/UX Degign<br>Logo Design <br>Mencintai mu
        </p>
    </div>
    </div>
    <div style="margin-top: 200px; margin-right: 200px;">
    <a href="https://api.whatsapp.com/send?phone=081250329327" target="_blank">
        <img src="{{ asset('image/33.png') }}" class="img-fluid" width="38" height="38" class="d-inline-block align-text-top" alt="Logo">
    </a>
</div>

    
    <div>
   
    
</section>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
