<?php
include '../koneksi.php';
    $query = mysqli_query($koneksi, "UPDATE tb_galericovid set 
    id_pengguna = '$_POST[id_pengguna]',
    tanggal = '$_POST[tanggal]',
    lembaga_instansi = '$_POST[lembaga_instansi]',
    nomor = '$_POST[nomor]',
    tujuan_kunjungan = '$_POST[tujuan_kunjungan]',
    jumlah_pengunjung = '$_POST[jumlah_pengunjung]'

    where id = '$_POST[id_pengguna]'") or die(mysqli_error($koneksi));
    header("location:daftar_galeri_covid.php");

    
?>