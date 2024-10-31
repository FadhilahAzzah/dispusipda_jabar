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
                    <li class="nav-item">
                        <form action="bp7.php" method="get" class="d-flex" role="search">
                            <input class="form-control me-2" type="text" name="cari" placeholder="Cari" aria-label="Search">
                            <!-- <button class="btn btn-outline-light" type="submit"><i class="bx bx-search"></i></button> -->
                            <input type="submit" value="Cari" class="btn btn-danger">
                        </form>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-icons">menu</span></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php"><i class="bx bx-home"></i> Beranda</a></li>
                            <li><a class="dropdown-item" href="data.php"><i class="bx bx-user"></i> Data Tamu</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bx bx-cog"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login.php"><i class="bx bx-log-in"></i> Login</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <td>No</td>
                    <td>No Subfons</td>
                    <td>Judul Subfons</td>
                    <td>No Series</td>
                    <td>Judul Series</td>
                    <td>No Berkas</td>
                    <td>Judul Berkas</td>
                    <td>No Item</td>
                    <td>Uraian Item</td>
                    <td>Tanggal</td>
                    <td>Jumlah</td>
                    <td>Tingkat Pengembangan</td>
                    <td>No Awal</td>
                    <td>Box</td>
                </tr>
            </thead>

            <?php
            include 'koneksi.php';
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = mysqli_query($koneksi,"SELECT * FROM arsip_statis_bp7 WHERE judul_berkas or uraian_item like '%".$cari."%'");				
            }else{
                $query = mysqli_query($koneksi,"SELECT * FROM arsip_statis_bp7");		
            }
                while ($hasil = mysqli_fetch_array($query)){
            ?>
    
            <tbody>
                <tr>
                    <td><?php echo $hasil['no']; ?></td>
                    <td><?php echo $hasil['no_subfonds']; ?></td>
                    <td><?php echo $hasil['judul_subfonds']; ?></td>
                    <td><?php echo $hasil['no_series']; ?></td>
                    <td><?php echo $hasil['judul_series']; ?></td>
                    <td><?php echo $hasil['no_berkas']; ?></td>
                    <td><?php echo $hasil['judul_berkas']; ?></td>
                    <td><?php echo $hasil['no_item']; ?></td>
                    <td><?php echo $hasil['uraian_item']; ?></td>
                    <td><?php echo $hasil['tanggal']; ?></td>
                    <td><?php echo $hasil['jumlah']; ?></td>
                    <td><?php echo $hasil['tingkat_pengembangan']; ?></td>
                    <td><?php echo $hasil['no_awal']; ?></td>
                    <td><?php echo $hasil['box']; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
</body>
</html>