<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $nim = $_GET['id_ruangan']; 
 $hasil = mysqli_query($conn,"DELETE from ruangan WHERE id_ruangan = '$nim'");
 
 if ($hasil)
 {
      header('location:e_ruangan.php');
 }

?>