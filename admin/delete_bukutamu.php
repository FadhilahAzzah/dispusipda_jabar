<?php

include '../koneksi.php';
$id = $_GET['id_pengguna']; {
    $query = "DELETE FROM tabel_form WHERE id_pengguna = '$id'";
    mysqli_query($koneksi, $query);
    header("Location:daftar_buku_tamu.php");
}
?>