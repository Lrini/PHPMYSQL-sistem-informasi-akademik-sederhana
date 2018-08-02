<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
if (isset($_POST['SUBMIT'])){
 $nama = $_POST['nama'];


//query for update data in database
 $hasil = mysqli_query($conn,"UPDATE mahasiswa SET nama='$nama' WHERE nim_mhs='".$_POST['nim']."'");
 //see the result
 if ($hasil) {
    header('location:e_mahasiswa.php');
	} else {
	echo "<script>alert('Gagal Di Update');</script>";
	}
	} else {
   echo "<script>alert('Input Masih ada yang Kosong'));</script>";
	}


?>