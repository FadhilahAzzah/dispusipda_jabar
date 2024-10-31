<?php
include("koneksi.php");
if(isset($_POST["submit"])) {
    $tanggal = $_POST["tanggal"];
    $lembaga_instansi = $_POST["lembaga_instansi"];
    $nomor = $_POST["nomor"];
    $email = $_POST["email"];
    $tujuan_kunjungan = $_POST["tujuan_kunjungan"];
    $jumlah_pengunjung = $_POST["jumlah_pengunjung"];
        $query = "INSERT INTO tb_galericovid     VALUES ('','$tanggal', '$lembaga_instansi','$nomor', '$email', '$tujuan_kunjungan', '$jumlah_pengunjung')";
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
        <header>Kunjungan Galeri Covid-19 </header>
        </div>
        <form action="form_covid.php" method="post" class="form">
            <div class="input-box">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" placeholder="Masukan Tanggal Kunjungan" required>
            </div>
            <div class="input-box">
                <label for="lembaga_instansi">Lembaga/Instansi</label>
                <input type="text" name="lembaga_instansi" id="lembaga_instansi" placeholder="Masukan Lembaga/Instansi" required>
            </div>
            <div class="column">
                <div class="input-box">
                    <label for="nomor">Nomor Whatsapp</label>
                    <input type="number" name="nomor" id="nomor" placeholder="Masukan Nomor WhatsApp">
                </div>
            </div> 
            <div class="input-box">
                <label for="email">Alamat Email</label>
                <input type="email" name="email" id="email" placeholder="Masukan Alamat Email" required>
            </div>
            <div class="input-box address">
                <label for="tujuan_kunjungan">Tujuan Kujungan</label>
                <input type="text" name="tujuan_kunjungan" id="tujuan_kunjungan" placeholder="Masukan Tujuan Kunjungan" required>
            </div>
            <div class="column">
                <div class="input-box">
                    <label for="jumlah_pengunjung">Jumlah Pengunjung</label>
                    <input type="number" name="jumlah_pengunjung" id="jumlah_pengunjung" placeholder="Masukan Jumlah Pengunjung">
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