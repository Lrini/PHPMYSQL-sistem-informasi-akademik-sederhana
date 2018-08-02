<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $nim = $_GET['id_mengajar']; 
 $hasil = mysqli_query($conn,"DELETE from mengajar WHERE id_mengajar = '$nim'");
 
 if ($hasil)
 {
      header('location:e_mengajar.php');
 }

?>