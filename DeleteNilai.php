<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $nim = $_GET['nim'];
 $hasil = mysqli_query($conn,"DELETE from nilai WHERE nim = '$nim'");
 
 if ($hasil)
 {
      header('location:e_nilai.php');
 }

?>