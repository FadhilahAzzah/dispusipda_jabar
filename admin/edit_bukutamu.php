<?php
include 'koneksi.php';

// Check if ID is provided
if (!isset($_GET['id_pengguna'])) {
    die("ID tidak ditemukan");
}

$id = mysqli_real_escape_string($koneksi, $_GET['id']);

// Fetch the data for the given ID
$query = mysqli_query($koneksi, "SELECT * FROM sudah_input WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data tidak ditemukan");
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlah_arsip = mysqli_real_escape_string($koneksi, $_POST['jumlah_arsip']);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);

    $update_query = "UPDATE sudah_input SET 
                     jumlah_arsip = '$jumlah_arsip', 
                     tanggal = '$tanggal' 
                     WHERE id = '$id'";

    if (mysqli_query($koneksi, $update_query)) {
        echo "<script>alert('Data berhasil diupdate'); window.location.href='data_siknjikn.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Arsip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Edit Data Arsip</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="jumlah_arsip" class="form-label">Jumlah Arsip</label>
                <input type="number" class="form-control" id="jumlah_arsip" name="jumlah_arsip" value="<?php echo $data['jumlah_arsip']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data['tanggal']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="sudah_input.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>