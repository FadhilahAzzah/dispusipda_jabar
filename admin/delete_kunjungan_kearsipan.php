<?php

include '../koneksi.php';
$id = $_GET['id_pengguna']; {
    $query = "DELETE FROM kunjungan_kearsipan WHERE id_pengguna = '$id'";
    mysqli_query($koneksi, $query);
    header("Location:daftar_kunjungan_kearsipan.php");
}
?>