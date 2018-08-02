<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $ID_DOSEN = $_GET['ID_DOSEN']; 
 $hasil = mysqli_query($conn,"DELETE from dosen WHERE id_dosen = '$ID_DOSEN'");
 
 if ($hasil)
 {
      header('location:e_dosen.php');
 }

?>