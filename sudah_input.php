<?php
include ('koneksi.php');

// $query_total = mysqli_query($koneksi, "SELECT SUM(jumlah) as total_keseluruhan FROM arsip_dispusipda");
// $total_keseluruhan = mysqli_fetch_assoc($query_total)['total_keseluruhan'];

$data_arsip = mysqli_query($koneksi,"SELECT * FROM arsip_statis_bp7");
$jumlah_arsip1 = mysqli_num_rows($data_arsip);

$data_arsip = mysqli_query($koneksi,"SELECT * FROM arsip_statis_bpppkb");
$jumlah_arsip2 = mysqli_num_rows($data_arsip);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="dispusipda.png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            margin-right: 10px;
        }
        
    </style>
    <title>Document</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="logo_jabar.png" alt="Logo Jabar" width="40" height="40">
            <span class="d-none d-lg-block">Dinas Perpustakaan dan Kearsipan Daerah</span>
        </a>
        <!-- Toggle Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- Menu Garis Empat (More Options) -->
                    <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-icons">menu</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="index.php">Beranda</a></li>
                        <li><a class="dropdown-item" href="#">Data Tamu</a></li>
                        <li><a class="dropdown-item" href="#">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <table class="table table-bordered">
            <thead class="table-primary">
            <tr>
                <td>No</td>
                <td>Nama Pencipta</td>
                <td>Jumlah Arsip</td>
                <!-- <td>Tanggal</td> -->
            </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="bp7.php">BP7</a></td>
                    <td><?php echo $jumlah_arsip1; ?></td>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="bpppkb.php">BPPPKB</a></td>
                    <td><?php echo $jumlah_arsip2; ?></td>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="#">Disperkim</a></td>
                    <td>0</td>
                    <!-- <td></td> -->
                </tr>
            </tbody>
            <!-- <tfoot>
                <tr class="table-info">
                    <td colspan="2" class="text-end"><strong>Total Arsip Keseluruhan:</strong></td>
                    <td colspan="3"><strong><?php echo $total_keseluruhan; ?></strong></td>
                </tr>
            </tfoot> -->
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
