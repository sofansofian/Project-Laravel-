<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Program Studi RPL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto"> <!-- Mengubah ms-auto menjadi ml-auto -->
                    
                <li class="nav-item">
                        <a class="nav-link fw-semibold active" href="{{ route('prodi') }}" style="color: #060355;">Prodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('berita') }}" style="color:#060355;">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('profile') }}" style="color:#060355;">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('biodata') }}" style="color:#060355;">Biodata</a>
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

    <header class=" text-center py-5">
    <div class="container">
            <div class="row">
                <div >
                    <div class="feature-item">
                        <i class="fa fa-cogs"></i>
                        <h1 style="font-weight: 600; font-size: 3em; color: #060355;" class="moving-underline">Rekayasa Perangkat Lunak</h1>

<style>
    .moving-underline {
        position: relative;
        display: inline-block;
        color: #000;
        text-decoration: none;
        overflow: hidden;
    }

    .moving-underline::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background-color: #FF5733;
        transform-origin: bottom right;
        transform: scaleX(0);
        animation: moveUnderline 1s infinite;
    }

    @keyframes moveUnderline {
        0% {
            transform: scaleX(0);
            transform-origin: bottom left;
        }
        50% {
            transform: scaleX(1);
            transform-origin: bottom center;
        }
        100% {
            transform: scaleX(0);
            transform-origin: bottom right;
        }
    }
</style>

                        <h1 style="font-weight: 400; font-size: 1em; color:#ED9700;">Politeknik Negeri Bengkalis</h1>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Apa itu RPL?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <img src="{{ ('image/7.jpg') }}" class="card-img-top" alt="Apa itu RPL">
                                <p>Program Studi Rekayasa Perangkat Lunak (RPL) adalah program studi di bidang teknik informatika yang fokus pada pengembangan perangkat lunak.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="accordion text-warning" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Materi Utama
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <img src="{{ ('image/4.jpg') }}" class="card-img-top" alt="Materi Utama">
                                <ul class="list-group">
                                    <li class="list-group-item">Analisis dan Desain Perangkat Lunak</li>
                                    <li class="list-group-item">Pemrograman Berorientasi Objek</li>
                                    <li class="list-group-item">Pengujian Perangkat Lunak</li>
                                    <li class="list-group-item">Manajemen Proyek Perangkat Lunak</li>
                                    <li class="list-group-item">...dan banyak lagi!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" >
                <div class="accordion" id="accordionExample3">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Peluang Karir
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" style="border: #ED9700;" data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <img src="{{ ('image/3.jpg') }}" class="card-img-top" alt="Peluang Karir">
                                <ul class="list-group">
                                    <li class="list-group-item">Software Engineer</li>
                                    <li class="list-group-item">Analyst Programmer</li>
                                    <li class="list-group-item">Quality Assurance Engineer</li>
                                    <li class="list-group-item">Project Manager</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    <footer class="navbar navbar-expand-lg navbar-light bg-light text-secondary ">
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
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
