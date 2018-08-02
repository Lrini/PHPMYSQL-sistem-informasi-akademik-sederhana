<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
	if (isset($_POST['SUBMIT'])){
	$nama_matkul=$_POST['nama_matkul'];
	$sks=$_POST['sks'];
	$semester=$_POST['semester'];
	//if ((!empty($a)) || (!empty($b)) || (!empty($c)) || (!empty($d))||(!empty($e))){
	
	
	$simpan= mysqli_query($conn,"update matkul SET nama_matkul='$nama_matkul',sks='$sks',semester='$semester' where id_matkul='".$_POST['id_matkul']."'");
	if ($simpan) {
	header('location:e_matakuliah.php');
	} else {
	echo "<script>alert('Gagal Di Update');</script>";
	}
	} else {
   echo "<script>alert('Input Masih ada yang Kosong'));</script>";
	}
	//}
	?>