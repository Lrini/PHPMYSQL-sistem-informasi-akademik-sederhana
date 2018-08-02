<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $nim = $_GET['id_jadwal']; 
 $hasil = mysqli_query($conn,"DELETE from jadwal WHERE id_jadwal = '$nim'");
 
 if ($hasil)
 {
      header('location:e_jadwal.php');
 }

?>