<?php
include("koneksi.php");
if(isset($_POST["submit"])) {
    $name = $_POST["nama_pengunjung"];
    $instansi_sekolah = $_POST["instansi_sekolah"];
    $tanggal_kunjungan = $_POST["tanggal_kunjungan"];
    $jumlah_pengunjung = $_POST["jumlah_pengunjung"];
    $alamat = $_POST["alamat"];
    $nomor = $_POST["nomor_telepon"];
    $file = $_POST["file"];
        $query = "INSERT INTO tabel_form VALUES ('','$name', '$instansi_sekolah','$tanggal_kunjungan', '$jumlah_pengunjung', '$alamat', '$nomor', '$file')";
        mysqli_query($koneksi, $query);
        header ("location:akhir.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="dispusipda.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendafataran</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <section class="container">
        <div class="navbar">
        <header>Form Daftar Isi Kunjungan Dispusipda Jabar</header>
        </div>
        <form action="buku_tamu.php" method="post" class="form">
            <div class="input-box">
                <label for="nama_pengunjung">Nama Lengkap</label>
                <input type="text" name="nama_pengunjung" id="nama_pengunjung" placeholder="Masukan Nama Lengkap" required>
            </div>
            <div class="input-box">
                <label for="instansi_sekolah">Instansi/Sekolah</label>
                <input type="text" name="instansi_sekolah" id="instansi_sekolah" placeholder="Masukan instansi/Sekolah" required>
            </div>
            <div class="input-box">
                <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                <input type="date" name="tanggal_kunjungan" id="tanggal_kunjungan" placeholder="Masukan Tanggal Kunjungan" required>
            </div>
            <div class="column">
                <div class="input-box">
                    <label for="jumlah_pengunjung">Jumlah Pengunjung</label>
                    <input type="number" name="jumlah_pengunjung" id="jumlah_pengunjung" placeholder="Masukan Jumlah Pengunjung">
                </div>
            </div>
            <div class="input-box address">
                <label for="alamat">Alamat Instansi/Sekolah</label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat Istansi/Sekolah" required>
            </div>
            <div class="column">
                <div class="input-box">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="number" name="nomor_telepon" id="nomor_telepon" placeholder="Masukan Nomor Telepon">
                </div>
            </div> 
            <div class="column">
                <div class="input-box">
                    <label for="file">Upload File</label>
                    <input type="file" name="file" id="file" class="file">
                </div>
            </div>
            <input type="submit" name="submit" class="submit">
            <p> Jl. Kawaluyaan Indah II No. 4 Soekarno Hatta Bandung
                Kelurahan Jatisari, Kecamatan Buahbatu, Kota Bandung, Jawa Barat 40286 <br>
                Telepon: 022-7320048 <br>
                Fax: 022-7320049 <br>
                Email: dispusipda@jabarprov.go.id <br>
            </p>
        </form>
    </section>
</body>
</html>