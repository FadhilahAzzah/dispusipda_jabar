<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../dispusipda.png">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../dashboard.css">
    <title>Halaman Admin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="../logo_jabar.png" alt="Logo Jabar" width="40" height="40">
            <span class="d-none d-lg-block">Dinas Perpustakaan dan Kearsipan Daerah</span>
        </a>
        <!-- <li class="nav-item ms-3">
            <a class="nav-link" href="tel:022-7320048" title="Hubungi Kami"><i class="bx bx-phone fs-4"></i>022-7320048</a>
        </li> -->
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                                <button class="btn btn-outline-light" type="submit"><i class="bx bx-search"></i></button>
                            </form>
                        </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-icons">menu</span></i> <!-- Bold and larger icon -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <!-- <li><a class="dropdown-item" href="index.php"><i class="bx bx-home"></i> Beranda</a></li>
                            <li><a class="dropdown-item" href="data.php"><i class="bx bx-user"></i> Data Tamu</a></li> -->
                            <!-- <li><a class="dropdown-item" href="#"><i class="bx bx-cog"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="logout.php"><i class="bx bx-log-out"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-conversation fs-1"></i>
                        <h5 class="card-title">SIKNJIKN</h5>
                        <a href="sinjkn.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-conversation fs-1"></i>
                        <h5 class="card-title">Daftar Kunjungan Wisata Kearsipan</h5>
                        <a href="daftar_kunjungan_kearsipan.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-conversation fs-1"></i>
                        <h5 class="card-title">Daftar Kunjungan Galeri Covid-19</h5>
                        <a href="daftar_galeri_covid19.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-conversation fs-1"></i>
                        <h5 class="card-title">Daftar Buku Tamu</h5>
                        <a href="daftar_buku_tamu.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>