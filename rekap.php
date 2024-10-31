<?php
// koneksi.php - File ini harus berisi pengaturan koneksi ke database
include 'koneksi.php';

// Memeriksa apakah parameter tanggal ada
if (isset($_GET['tanggal_awal']) && isset($_GET['tanggal_akhir'])) {
    $tanggal_awal = $_GET['tanggal_awal'];
    $tanggal_akhir = $_GET['tanggal_akhir'];

    // Query untuk mengambil data berdasarkan periode tanggal
    $query = "SELECT * FROM tabel_transaksi WHERE tanggal_input BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
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
    echo "<th>ID</th>";
    echo "<th>Nama arsip</th>";
    echo "<th>Jumlah arsip</th>"; 
    echo "<th>Tanggal input</th>";
    echo "<th>Keterangan</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
        echo "<td>" . htmlspecialchars($row['jumlah']) . "</td>";
        echo "<td>" . htmlspecialchars($row['tanggal_input']) . "</td>";
        echo "<td>" . htmlspecialchars($row['keterangan']) . "</td>";
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
    <link rel="icon" href="dispusipda.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Tambahkan Font Awesome -->
    <title>Hasil Rekap</title>
    <link rel="stylesheet" href="form.css">
    <style>
        @media print {
            .no-print { display: none; }
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2>Hasil Rekap</h2>
    <p>Periode: <?php echo htmlspecialchars($tanggal_awal); ?> hingga <?php echo htmlspecialchars($tanggal_akhir); ?></p>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama arsip</th>
                <th>Jumlah arsip</th>
                <th>Tanggal input</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['nama']); ?></td>
                    <td><?php echo htmlspecialchars($row['jumlah']); ?></td>
                    <td><?php echo htmlspecialchars($row['tanggal_input']); ?></td>
                    <td><?php echo htmlspecialchars($row['keterangan']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    
    <div class="no-print">
        <button onclick="window.print()" class="btn btn-primary">Cetak Laporan</button>
        <a href="?tanggal_awal=<?php echo urlencode($tanggal_awal); ?>&tanggal_akhir=<?php echo urlencode($tanggal_akhir); ?>&export=word" class="btn btn-success">
            <i class="fas fa-download"></i> 
        </a>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
