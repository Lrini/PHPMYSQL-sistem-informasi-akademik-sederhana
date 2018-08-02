<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
	if (isset($_POST['SUBMIT'])){
	$b=$_POST['pass'];
	//if ((!empty($a)) || (!empty($b)) || (!empty($c)) || (!empty($d))||(!empty($e))){
	
	
	$simpan= mysqli_query($conn,"Update admin SET pass='$b' where user='".$_POST['user']."'");
	if ($simpan) {
	header('location:e_admin.php');
	} else {
	echo "<script>alert('Gagal Di Update');</script>";
	}
	} else {
   echo "<script>alert('Input Masih ada yang Kosong'));</script>";
	}
	//}
	?>