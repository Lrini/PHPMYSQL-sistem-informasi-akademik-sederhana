<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $nim = $_GET['id_matkul']; 
 $hasil = mysqli_query($conn,"DELETE from matkul WHERE id_matkul = '$nim'");
 
 if ($hasil)
 {
      header('location:e_matakuliah.php');
 }

?>