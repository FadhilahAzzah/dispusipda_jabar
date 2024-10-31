<?php
global $koneksi;

  $host     ="localhost";
  $user     ="root";
  $pass     ="";
  $db       ="dispusipda";
  $koneksi = mysqli_connect($host,$user,$pass,$db);

  if(!$koneksi){
    die ("koneksi gagal" . mysqli_connect_error());
  }
   
?>