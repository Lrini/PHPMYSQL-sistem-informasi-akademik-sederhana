<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
	if (isset($_POST['SUBMIT'])){
	$c=$_POST['jam'];
	$d=$_POST['status'];
	//if ((!empty($a)) || (!empty($b)) || (!empty($c)) || (!empty($d))||(!empty($e))){
	
	

	$simpan= mysqli_query($conn,"update jadwal SET jam='$c' where id_jadwal='".$_POST['id_jadwal']."'");
	if ($simpan) {
	header('location:e_jadwal.php');
	} else {
	echo "<script>alert('Gagal Di Update');</script>";
	}
	} else {
   echo "<script>alert('Input Masih ada yang Kosong'));</script>";
	}
	//}
	?>