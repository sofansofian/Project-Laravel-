<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Data Dosen</title>
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
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}" style="color: #060355;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.buku') }}" style="color: #060355;">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.peminjaman') }}" style="color: #060355;">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold active" href="{{ route('admin.dosen') }}" style="color: #060355;">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.berita') }}" style="color: #060355;">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" style="text-decoration: none">
                            <p class="nav-link fw-semibold" style="color: #060355;">Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center" style="color: #060355;">Data Dosen</h2><br><br>

        <div class="table-responsive"> <!-- Tambahkan class "table-responsive" -->
            <table class="table table-bordered border-warning">
                <thead class="table-warning">
                    <tr>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>Mata Kuliah</th>
                        <th>Aksi</th> <!-- Kolom untuk tombol Delete -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosens as $dosen)
                        <tr>
                            <td>{{ $dosen->nama }}</td>
                            <td>{{ $dosen->nip }}</td>
                            <td>{{ $dosen->email }}</td>
                            <td>{{ $dosen->mata_kuliah }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.editDosen', $dosen->id) }}" class="btn btn-warning mx-2">Edit</a>
                                    <form action="{{ route('deleteDosen', ['id' => $dosen->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mx-2">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
