<?php
include("koneksi.php");
if(isset($_POST["submit"])) {
    $tanggal = $_POST["tanggal"];
    $unit_pencipta = $_POST["unit_pencipta"];
    $jenis_arsip = $_POST["jenis arsip"];
    $jumlah_item = $_POST["jumlah_item"];
        $query = "INSERT INTO tabel_form VALUES ('','$tanggal', '$bulan','$tahun', '$unit_pencipta', '$jenis_arsip')";
        mysqli_query($koneksi, $query);
        header ("location:after.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form sinjkn</title>
    <link rel="stylesheet" href="form.css">
    <link rel="icon" href="dispusipda.png">
</head>
<body>
    <section class="container">
        <div class="navbar">
        <header>Form SINJIKN</header>
        </div>
        <form action="buku_tamu.php" method="post" class="form">
            <div class="input-box">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" placeholder="tanggal" required>
            </div>
            <div class="column">
                <div class="input-box">
                    <label for="unit_pencipta">Unit Pencipta/Fones</label>
                    <input type="text" name="unit_pencipta" id="unit_pencipta" placeholder="unit pencipta">
                </div>
            </div>
            <div class="input-box address">
                <label for="jenis_arsip">Jenis Arsip</label>
                <input type="text" name="jenis_arsip" id="jenis_arsip" placeholder="jenis_arsip" required>
            </div>
            <div class="column">
                <div class="input-box">
                    <label for="jumlah_item">Jumlah Item</label>
                    <input type="number" name="jumlah_item" id="item_jumlah" placeholder="jumlah item">
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