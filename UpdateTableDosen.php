<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
if (isset($_POST['SUBMIT'])){
$ID_DOSEN = $_POST['ID_DOSEN'];
 $NAMA_DOSEN = $_POST['NAMA_DOSEN'];


//query for update data in database
 $hasil = mysqli_query($conn,"UPDATE dosen SET NAMA_DOSEN='$NAMA_DOSEN' WHERE ID_DOSEN='".$_POST['ID_DOSEN']."'");
 //see the result
 if ($hasil) {
    header('location:e_dosen.php');
	} else {
	echo "<script>alert('Gagal Di Update');</script>";
	}
	} else {
   echo "<script>alert('Input Masih ada yang Kosong'));</script>";
	}


?>