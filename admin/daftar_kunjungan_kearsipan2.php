<?php
// koneksi.php - File ini harus berisi pengaturan koneksi ke database
include '../koneksi.php';

// Memeriksa apakah parameter tanggal ada
if (isset($_GET['tanggal_awal']) && isset($_GET['tanggal_akhir'])) {
    $tanggal_awal = $_GET['tanggal_awal'];
    $tanggal_akhir = $_GET['tanggal_akhir'];

    // Query untuk mengambil data berdasarkan periode tanggal
    $query = "SELECT * FROM kunjungan_kearsipan WHERE tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
    $result = mysqli_query($koneksi, $query);
    
    if (!$result) {
        die("Query Error: " . mysqli_error($koneksi));
    }   
} else {
    die("Tanggal awal dan akhir harus diisi.");
} 

// Menambahkan opsi untuk mengunduh sebagai Word
if (isset($_GET['export']) && $_GET['export'] === 'word') {
    header("Content-Type: application/vnd.ms-word");
    header("Content-Disposition: attachment; filename=laporan_arsip  " . date('Ymd_His') . ".doc");

    echo "<html>";
    echo "<head>";
    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
    echo "<title>Laporan</title>";
    echo "</head>";
    echo "<body>";
    echo "<h2>Periode: $tanggal_awal hingga $tanggal_akhir</h2>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>tanggal</th>";
    echo "<th>lembaga instansi</th>"; 
    echo "<th>nomor</th>";
    echo "<th>email</th>";
    echo "<th>tujuan kunjungan</th>";
    echo "<th>jumlah pengunjung</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['tanggal']) . "</td>";
        echo "<td>" . htmlspecialchars($row['lembaga_instansi']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nomor']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['tujuan_kunjungan']) . "</td>";
        echo "<td>" . htmlspecialchars($row['jumlah_pengunjung']) . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</body>";
    echo "</html>";

    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kunjungan Kearsipan</title>
    <link rel="icon" href="../dispusipda.png">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Tambahkan Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="kunjungan_kearsipan.css"> -->
    <style>
        @media print {
            .no-print { display: none; }
        }
        .navbar {
            padding: 10px 20px;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand img {
            border-radius: 50%;
        }
    </style>
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
                            <li><a class="dropdown-item" href="halaman_admin.php"><i class="bx bx-home"></i> Beranda</a></li>
                            <!-- <li><a class="dropdown-item" href="data.php"><i class="bx bx-user"></i> Data Tamu</a></li> -->
                            <!-- <li><a class="dropdown-item" href="#"><i class="bx bx-cog"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="logout.php"><i class="bx bx-log-out"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container mt-4">
    <h2>Daftar Kunjungan Wisata Kearsipan</h2>
    <p>Periode: <?php echo htmlspecialchars($tanggal_awal); ?> hingga <?php echo htmlspecialchars($tanggal_akhir); ?></p>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Lembaga/Instansi</th>
                <th>Nomor WhatsApp</th>
                <th>Alamat Email</th>
                <th>Tujuan Kunjungan</th>
                <th>Jumlah pengunjung</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['tanggal']); ?></td>
                    <td><?php echo htmlspecialchars($row['lembaga_instansi']); ?></td>
                    <td><?php echo htmlspecialchars($row['nomor']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['tujuan_kunjungan']); ?></td>
                    <td><?php echo htmlspecialchars($row['jumlah_pengunjung']); ?></td>
                    <td>
                        <a href="update_kunjungan.php?id_pengguna=<?php echo $row['id_pengguna']; ?>" type="button" class="btn btn-success btn-sm">Edit</a>                                                  
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $row['id_pengguna']; ?>">
                            Hapus
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop<?php echo $row['id_pengguna']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Menghapus Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus ini?
                                    </div>
                                    <div class="modal-footer">                          
                                        <a href="delete_kunjungan_kearsipan.php?id_pengguna=<?php echo $row['id_pengguna']; ?>" class="btn btn-danger">Hapus</a>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    
    <div class="no-print">
        <button onclick="window.print()" class="btn btn-primary">Cetak Laporan</button>
        <a href="?tanggal_awal=<?php echo urlencode($tanggal_awal); ?>&tanggal_akhir=<?php echo urlencode($tanggal_akhir); ?>&export=word" class="btn btn-success">
            <i class="fas fa-download"></i> 
        </a>
        <a href="daftar_kunjungan_kearsipan.php" class="btn btn-secondary">Kembali</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
