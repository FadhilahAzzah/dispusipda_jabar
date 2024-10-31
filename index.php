<?php
include ('koneksi.php');

// Ambil data total buku tamu
$get1 = mysqli_query($koneksi, "SELECT SUM(jumlah_pengunjung) as total_pengunjung FROM tabel_form");
$row = mysqli_fetch_assoc($get1);
$total_pengunjung1 = $row['total_pengunjung'];

// Ambil data total Galeri Covid_-19
$get3 = mysqli_query($koneksi, "SELECT SUM(jumlah_pengunjung) as total_pengunjung FROM tb_galericovid");
$row = mysqli_fetch_assoc($get3);
$total_pengunjung3 = $row['total_pengunjung'];

// Ambil data total Galeri Covid_-19
$get2 = mysqli_query($koneksi, "SELECT SUM(jumlah_pengunjung) as total_pengunjung FROM kunjungan_kearsipan");
$row = mysqli_fetch_assoc($get2);
$total_pengunjung2 = $row['total_pengunjung'];

?>

<?php 
$jumlah_pengunjung  = mysqli_query($koneksi, "SELECT jumlah_pengunjung FROM tb_galericovid order by ID asc");
$tujuan       = mysqli_query($koneksi, "SELECT tujuan_kunjungan FROM tb_galericovid order by ID asc");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="dispusipda.png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="js/Chart.js">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Dashboard</title>
    <style>
        h1 {
            color: white;
            margin-top: 50px;
            margin-bottom: 40px
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="logo_jabar.png" alt="Logo Jabar" width="40" height="40">
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
                            <li><a class="dropdown-item" href="index.php"><i class="bx bx-home"></i> Beranda</a></li>
                            <!-- <li><a class="dropdown-item" href="data.php"><i class="bx bx-user"></i> Data Tamu</a></li> -->
                            <!-- <li><a class="dropdown-item" href="#"><i class="bx bx-cog"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="admin/login.php"><i class="bx bx-log-in"></i> Login</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-10">
    

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-conversation fs-1"></i>
                        <h5 class="card-title">Kunjungan Wisata kearsipan</h5>
                        <a href="kunjungan_kearsipan.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-search-alt fs-1"></i>
                        <h5 class="card-title">Penelusuran Arsip</h5>
                        <a href="#" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-broadcast fs-1"></i>
                        <h5 class="card-title">Sosialisasi/Konsultasi</h5>
                        <a href="#" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-data fs-1"></i>
                        <h5 class="card-title">SIKNJIKN</h5>
                        <a href="sin.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-book fs-1"></i>
                        <h5 class="card-title">Galeri Covid-19</h5>
                        <a href="form_covid.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div> <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bx bx-book fs-1"></i> 
                        <h5 class="card-title">Buku Tamu</h5>
                        <a href="buku_tamu.php" class="btn btn-primary mt-3">Masuk</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <center><h1>Jumlah Data</h1></center>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"><h3><center><?=$total_pengunjung1; ?></center></h3></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Buku Tamu</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"><center><h3><?=$total_pengunjung3; ?></h3></center></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Galeri Covid-19</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"><center><h3><?=$total_pengunjung2; ?></h3></center></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Kunjungan Wisata Kearsipan</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"><center><h3>-</h3></center></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

