<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $nim = $_GET['user']; 
 $hasil = mysqli_query($conn,"DELETE from admin WHERE user = '$nim'");
 
 if ($hasil)
 {
      header('location:e_matakuliah.php');
 }

?>