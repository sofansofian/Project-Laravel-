<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Homepage</title>
    <style>
        body {
            background-image: url("{{ asset('image/90.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #060355;
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
                        <a class="nav-link " href="{{ route('berita') }}" style="color:#060355;">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}" style="color:#060355;">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('biodata') }}" style="color:#060355;">Biodata</a>
                    </li>
                <style>
    .moving-underline {
        position: relative;
        display: inline-block;
        color: #060355;
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
        transition: transform 0.3s ease;
    }

    .moving-underline:active::after {
        transform-origin: bottom left;
        transform: scaleX(1);
    }
</style>

<!-- Kemudian, terapkan pada tautan "Login" -->
<li class="nav-item">
    <a class="nav-link fw-semibold moving-underline" href="{{ route('auth.login') }}">Login</a>
</li>

                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="{{ route('auth.register') }}" style="color:#060355;">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="features" style="margin-top: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="color: #060355;">
                    <div class="feature-item">
                        <i class="fa fa-cogs"></i>
                        <h1 style="font-weight: 600; font-size: 4em;">Rekayasa<br>Perangkat Lunak</h1>
                        <p>Politeknik Negeri Bengkalis by <a href="https://www.instagram.com/sfnsoo/" style="color:#060355; text-decoration: none;">@sfnsoo</a></p>
                        <a href="http://www.polbeng.ac.id/official/pengabdian" class="btn text-light shadow-lg-warning" style="background-color: #ED9700; position: relative;" target="_blank" onmouseover="gerakkanAtas(this)" onmouseout="kembali(this)">
    Selengkapnya •
</a>

<style>
    @keyframes gerakanAtas {
        0% { transform: translateY(0); }
        100% { transform: translateY(-5px); }
    }

    @keyframes kembali {
        0% { transform: translateY(-5px); }
        100% { transform: translateY(0); }
    }

    .btn {
        transition: transform 1s; /* Menambahkan transisi untuk menghaluskan gerakan */
        border-radius: 10px; /* Melengkungkan sudut tombol */
    }
</style>

<script>
    function gerakkanAtas(element) {
        element.style.animation = 'gerakanAtas 0.5s forwards';
    }

    function kembali(element) {
        element.style.animation = 'kembali 0.5s forwards';
    }
</script>



                    </div>
                </div>
                <div class="col-lg-5 text-center ms-auto" style="margin-left: 10px;">
    <img src="{{ asset('image/icon6.png') }}" width="280" height="280" class="img-fluid d-inline-block align-text-top moving-image">
</div>

<style>
    @keyframes moveHorizontal {
        0% {
            transform: translateX(0);
        }
        50% {
            transform: translateX(20px); /* Sesuaikan dengan seberapa jauh ingin bergerak */
        }
        100% {
            transform: translateX(0);
        }
    }

    .moving-image {
        animation: moveHorizontal 2s linear infinite;
    }
</style>

            </div>
        </div>

    </section>
    <section style="margin-top: 150px; margin-left: 90px; margin-right: 50px;">
    <img src="{{ asset('image/66.png') }}" width="1117" height="150" class="img-fluid mx-auto">
    </section>
    
    <section style="display: flex; margin-top: 60px;">
    <img src="{{ asset('image/77.png') }}" class="img-fluid" width="339" height="399" style="margin-left: 90px;">
    <div class="col-lg-8" style="color: #060355;">
        <div class="feature-item" style="margin-left:20px; margin-top: 100px;">
            <i class="fa fa-cogs"></i> 
            <h1 style="font-weight: 600; font-size: 2em;" class="moving-underline">Biodata Mahasiswa Rekayasa Perangkat Lunak</h1>

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

            <p>Politeknik Negeri Bengkalis Tahun Angkatan 2021</p>
    </div>
    <div class="d-flex">
    <div class="feature-item" style="margin-left:20px;">
        <i class="fa fa-cogs"></i> 
        <h1 style="font-weight: bold; font-size: 1em;">Sofan sofian</h1>
        <p>Jurusan Teknik Informatika <br>Prodi Rekayasa Perangkat <br>Lunak
        </p>
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
        <i class="fa fa-cogs "></i> 
        <h1 style="font-weight: bold; font-size: 1em;">Skill</h1>
        <p>UI/UX Degign 75%<br>Logo & Design 70% <br>Mencintai mu
        </p>
    </div>
    </div>
    <div style="margin-top: 200px; margin-right: 140px;">
    <a href="https://api.whatsapp.com/send?phone=081250329327" target="_blank">
        <img src="{{ asset('image/33.png') }}" class="img-fluid waving-image" width="38" height="38" class="d-inline-block align-text-top" alt="Logo">
    </a>
</div>

<style>
    @keyframes geliat {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(2.0);
        }
    }

    .waving-image:hover {
        animation: geliat 2s infinite; /* Mengatur animasi geliat saat hover */
    }
</style>


    
    <div>
    
    
</section>

    <section style="margin-left: 110px; margin-right:120px; margin-top:40px;">
    <h5 class="fw-bold moving-underline">Sejarah Rekayasa Perangkat Lunak</h5>

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

        <p>Jurusan Teknik Informatika (JTI) merupakan salah satu jurusan yang ada di Politeknik Negeri Bengkalis berdasarkan Peraturan Menteri Pendidikan Nasional No 28 Tahun 2011 tentang pendirian organisasi dan tata kerja Politeknik Negeri Bengkalis (OTK Polbeng). Sebelumnya JTI merupakan salah satu program studi Teknik Informatika dari tujuh program studi yang ada di Politeknik Bengkalis (Polbeng). Seluruh kegiatan pada JTI dipimpin oleh ketua jurusan dibantu oleh sekretaris jurusan, ketua program studi, dosen, kepala laboratorium, tenaga laboran dan staf administrasi. JTI memiliki dosen tetap sejumlah 19 orang, sebagian besar dosen tetap berusia antara 28-40 tahun memiliki pendidikan S2. Jumlah dosen S2 (18 orang) dengan beragam bidang keahlian yang mendukung proses pembelajaran berdasarkan kurikulum yang ada di JTI sedangkan 1 orang masih studi lanjut S3. Untuk mendukung kompetensi dosen intitusi telah mengikutsertakan 6 orang dosen untuk menjadi tenaga asesor uji kompetensi dari Badan Nasional Sertifikasi Profesi (BNSP). Sementara tenaga kependidikan JTI sejumlah 7 orang, yang terdiri dari 8 tenaga laboran dan 1 staf administrasi jurusan.

        Selain mengikutsertakan dosen sebagai tenaga asesor BNSP, JTI juga memiliki 7 dosen tetap yang bersertifikat Internasional dari bidang pemrograman, database (Oracle Academy). Sementara untuk bidang jaringan komputer saat ini telah memiliki 3 dosen tetap dan 1 tenaga kependidikan (laboran) yang bersertifikat Internasional dari Cisco Networking Academy. Kedua bidang tersebut saat ini telah aktif dalam kegiatan pelatihan dan uji sertifikasi yang diberikan kepada mahasiswa JTI khususnya, dan untuk umum/instansi. Selain itu juga, ada 2 orang dosen TI yang sudah mendapatkan sertifikasi Mikrotik Academy.

        Setiap dosen aktif melakukan penelitian dan pengabdian masyarakat, hal ini terbukti beberapa kegiatan dilakukan kepada masyarakat desa, sekolah, instansi pemerintah, lembaga kemasyarakatan, panti asuhan dan kegiatan lain yang langsung membantu kebutuhan masyarakat akan perkembangan dan penerapan teknologi informasi.
    </section>

    <section style="margin-top: 50px; margin-left: 90px; margin-right: 50px;">
    <img src="{{ asset('image/66.png') }}" width="1117" height="150" class="img-fluid mx-auto">
    </section>


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


    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
