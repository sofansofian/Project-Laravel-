<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            background-image: url("{{ asset('image/90.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    
        .profile-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }

        .profile-image {
            border-radius: 50%;
            max-width: 150px;
            margin: 0 auto;
            display: block;
        }

        .map-container {
            height: 300px;
            margin-top: 20px;
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
                        <a class="nav-link" href="{{ route('prodi') }}" style="color: #060355;">Prodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('berita') }}" style="color:#060355;">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold active" href="{{ route('profile') }}" style="color:#060355;">Profile</a>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
    <script>
        function initMap() {
            var location = {lat: -7.12345, lng: 112.34567}; // Koordinat lokasi pengguna

            var map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 15
            });

            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Lokasi Pengguna'
            });
        }
    </script>
</head>
<body>
    <div class="profile-container">
        
        <img src="{{ asset('image/77.png') }}" alt="Foto Profil" width="309" height="369">
        <h1 style="color: #060355;">Sofan sofian</h1>
        <p style="color: #060355;">Mahasiswa dari Jurusan Teknik Informatika Prodi Rekayasa perangkat lunak Politeknik Negeri Bengkalis, sekarang semester 5</p>
        
        <div class="map-container">
            <div id="map" style="height: 100%;"></div>
        </div>
        <div style="color: #060355;">
        <h2>Informasi Pengguna</h2>
        <p>Nama: Sofan sofian</p>
        <p>Umur: 20 tahun</p>
        <p>Alamat: Bandul Kec. Tasik putri puyu Kab. Kepulauan Meranti</p>
        <p>Email: sofan1402@gmail.com</p>
    </div>

    <script>
        initMap();
    </script>
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
