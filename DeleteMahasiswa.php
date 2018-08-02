<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $nim = $_GET['nim']; 
 $hasil = mysqli_query($conn,"DELETE from mahasiswa WHERE nim_mhs = '$nim'");
 
 if ($hasil)
 {
      header('location:e_mahasiswa.php');
 }

?>