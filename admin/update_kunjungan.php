<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update_kunjungan.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <title>Edit Data Kunjungan</title>
</head>
<body>
    <?php
    include "../koneksi.php";
    $id = $_GET['id_pengguna']; 
    $query = mysqli_query($koneksi, "SELECT * FROM kunjungan_kearsipan WHERE id_pengguna='$id'");
    while ($hasil = mysqli_fetch_array($query)) {
    ?>
    <div class="container">
        <h1 class="judul">Edit Data Kunjungan</h1>
        <form action="proses_editkunjungankearsipan.php" method="POST">
            <input type="hidden" name="id_pengguna" value="<?php echo $hasil['id_pengguna']; ?>">
            
            <label for="tanggal">Tanggal:</label>
            <input type="text" name="tanggal" value="<?php echo $hasil['tanggal']; ?>" id="tanggal">

            <label for="lembaga_instansi">Lembaga/Instansi:</label>
            <input type="text" name="lembaga_instansi" value="<?php echo $hasil['lembaga_instansi']; ?>" id="lembaga_instansi">

            <label for="nomor">Nomor WhatsApp:</label>
            <input type="tel" name="nomor" value="<?php echo $hasil['nomor']; ?>" id="nomor">

            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $hasil['email']; ?>" id="email">

            <label for="tujuan_kunjungan">Tujuan Kunjungan:</label>
            <input type="text" name="tujuan_kunjungan" value="<?php echo $hasil['tujuan_kunjungan']; ?>" id="tujuan_kunjungan">

            <label for="jumlah_pengunjung">Jumlah Pengunjung:</label>
            <input type="text" name="jumlah_pengunjung" value="<?php echo $hasil['jumlah_pengunjung']; ?>" id="jumlah_pengunjung">

            <input type="submit" value="Edit">
            <button><a href="daftar_kunjungan_kearsipan.php">Kembali</a></button>
        </form>
    </div>
    <?php } ?>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
</html>
