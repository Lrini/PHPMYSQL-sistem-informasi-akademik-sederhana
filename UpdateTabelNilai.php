<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
	if (isset($_POST['SUBMIT'])){
	$b=$_POST['nilai'];
	//if ((!empty($a)) || (!empty($b)) || (!empty($c)) || (!empty($d))||(!empty($e))){
	
	
	$simpan= mysqli_query($conn,"Update nilai SET nilai='$b' where nim='".$_POST['nim']."'");
	if ($simpan) {
	header('location:e_nilai.php');
	} else {
	echo "<script>alert('Gagal Di Update');</script>";
	}
	} else {
   echo "<script>alert('Input Masih ada yang Kosong'));</script>";
	}
	//}
	?>