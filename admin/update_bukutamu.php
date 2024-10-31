<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update_bukutamu.css">
    <title>update</title>
</head>
<body>
    <?php

    include "../koneksi.php";
    $id = $_GET['id_pengguna']; 
    $query = mysqli_query($koneksi,"SELECT * FROM tabel_form WHERE id_pengguna='$id'");
    while ($hasil = mysqli_fetch_array($query)){
    ?>
    <div class="container-fluid">
        <h1 class="judul">Edit Data</h1>
        <form action="proses_editbuku.php" method="POST">
        
        
        <input type="hidden" name="id_pengguna" value="<?php echo $hasil['id_pengguna']; ?>">
            <label for="nama_pengunjung">Nama Pengunjung:</label>
            <input type="text" name="nama_pengunjung" value="<?php echo $hasil['nama_pengunjung']; ?>" id="nama_pengunjung" > <br>

            <label for="instansi_sekolah">Instansi/Sekolah:</label>
            <input type="text" name="instansi_sekolah" value="<?php echo $hasil['instansi_sekolah']; ?>" id="instansi_sekolah" > <br>

            <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
            <input type="text" name="tanggal_kunjungan" value="<?php echo $hasil['tanggal_kunjungan']; ?>" id="tanggal_kunjungan" > <br>

            <label for="jumlah_pengunjung">Jumlah Pengunjung:</label>
            <input type="text" name="jumlah_pengunjung" value="<?php echo $hasil['jumlah_pengunjung']; ?>" id="jumlah_pengunjung" > <br>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="<?php echo $hasil['alamat']; ?>" id="alamat" > <br>

            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="tel" name="nomor_telepon" value="<?php echo $hasil['nomor_telepon']; ?>" id="nomor_telepon" > <br>

            <input type="submit" value="edit">
            <button><a href="daftar_buku_tamu.php">kembali</a></button>
            
    </form>
    <?php } ?>
</body>
</html>