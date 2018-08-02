<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
	if (isset($_POST['SUBMIT'])){
	$b=$_POST['id_dosen'];
	//if ((!empty($a)) || (!empty($b)) || (!empty($c)) || (!empty($d))||(!empty($e))){
	
	
	$simpan= mysqli_query($conn,"Update mengajar SET id_dosen='$b' where id_mengajar='".$_POST['id_mengajar']."'");
	if ($simpan) {
	header('location:e_mengajar.php');
	} else {
	echo "<script>alert('Gagal Di Update');</script>";
	}
	} else {
   echo "<script>alert('Input Masih ada yang Kosong'));</script>";
	}
	//}
	?>