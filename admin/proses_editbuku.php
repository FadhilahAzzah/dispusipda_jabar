<?php
include '../koneksi.php';
    $query = mysqli_query($koneksi, "UPDATE tabel_form set 
    id_pengguna= '$_POST[id_pengguna]',
    nama_pengunjung= '$_POST[nama_pengunjung]',
    instansi_sekolah = '$_POST[instansi_sekolah]',
    tanggal_kunjungan = '$_POST[tanggal_kunjungan]',
    jumlah_pengunjung = '$_POST[jumlah_pengunjung]',
    alamat = '$_POST[alamat]',
    nomor_telepon = '$_POST[nomor_telepon]'

    where id_pengguna = '$_POST[id_pengguna]'") or die(mysqli_error($koneksi));
    header("location:daftar_buku_tamu.php");

    
?>