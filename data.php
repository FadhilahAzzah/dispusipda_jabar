<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="dispusipda.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <title>Rekap Form</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="logo_jabar.png" alt="Logo Jabar" width="40" height="40">
            <span class="d-none d-lg-block">Dinas Perpustakaan dan Kearsipan Daerah</span>
        </a>
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <form action="data.php" method="get" class="d-flex" role="search">
                            <input class="form-control me-2" type="text" name="cari" placeholder="Cari" aria-label="Search">
                            <!-- <button class="btn btn-outline-light" type="submit"><i class="bx bx-search"></i></button> -->
                            <input type="submit" value="Cari" class="btn btn-danger">
                        </form>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded" style="font-size: 1.75rem; font-weight: bold;"></i> <!-- Bold and larger icon -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php"><i class="bx bx-home"></i> Beranda</a></li>
                            <li><a class="dropdown-item" href="data.php"><i class="bx bx-user"></i> Data Tamu</a></li>
                            <!-- <li><a class="dropdown-item" href="#"><i class="bx bx-cog"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bx bx-log-out"></i> Logout</a></li> -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- <nav class="navbar bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form action="index.php" method="GET">
      <input type="text" name="cari" >
      <input type="submit" value="Cari" class="btn btn-danger">
    </form>
  </div>
</nav> -->

  <table border="1" class="table table-striped table-hover" >
    <thead class="table-primary">
      <tr>
        <td>No.</td>
        <td>Nama Pengunjung</td>
        <td>Instansi/sekolah</td>
        <td>Tanggal Kunjungan</td>
        <td>Jumlah pengunjung</td>
        <td>Alamat</td>
        <td>Nomor telepon</td>
        <td>Aksi</td>
      </tr>
    </thead>

          <?php

          include 'koneksi.php';
          if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $query = mysqli_query($koneksi,"SELECT * FROM tabel_form WHERE tanggal_kunjungan like '%".$cari."%'");				
          }else{
            $query = mysqli_query($koneksi,"SELECT * FROM tabel_form");		
          }
          $no_urut++;
              while ($hasil = mysqli_fetch_array($query)){
          ?>
  <tbody>
      <tr>
        <td><?php echo $no_urut++; ?></td>
        <td><?php echo $hasil['nama_pengunjung']; ?></td>
        <td><?php echo $hasil['instansi_sekolah']; ?></td>
        <td><?php echo $hasil['tanggal_kunjungan']; ?></td>
        <td><?php echo $hasil['jumlah_pengunjung']; ?></td>
        <td><?php echo $hasil['alamat']; ?></td>
        <td><?php echo $hasil['nomor_telepon']; ?></td>
        <td>
          <a href="update.php?id_pelanggan=<?php echo $hasil['id_pelanggan']; ?>" type="button" class="btn btn-success btn-sm"></i> Edit</a>                                                  
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            </i> Hapus</button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Menghapus Data </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          Apakah Anda yakin Ingin menghapus ini?
                          </div>
                          <div class="modal-footer">                          
                          <a href="delete.php?id_pelanggan=<?php echo $hasil['id_pelanggan'] ?>" class="btn btn-danger">Hapus</a>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                          </div>
                        </div>
                      </div>
                    </div>
        </td>
      </tr>
    </tbody>      
          <?php } ?>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>