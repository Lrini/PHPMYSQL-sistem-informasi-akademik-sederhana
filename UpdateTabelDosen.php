<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
if (isset($_POST['SUBMIT'])){
 $NAMA_DOSEN = $_POST['NAMA_DOSEN'];


//query for update data in database
 $hasil = mysqli_query($conn,"UPDATE dosen SET nama='$NAMA_DOSEN' WHERE id_dosen='".$_POST['ID_DOSEN']."'");
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