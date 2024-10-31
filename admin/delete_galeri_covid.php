<?php

include '../koneksi.php';
$id = $_GET['id_pengguna']; {
    $query = "DELETE FROM tb_galericovid WHERE id_pengguna = '$id'";
    mysqli_query($koneksi, $query);
    header("Location:daftar_galeri_covid.php");
}
?>