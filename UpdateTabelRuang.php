<?php
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
	if (isset($_POST['SUBMIT'])){
	$b=$_POST['nama_ruangan'];
	//if ((!empty($a)) || (!empty($b)) || (!empty($c)) || (!empty($d))||(!empty($e))){
	
	
	$simpan= mysqli_query($conn,"Update ruangan SET nama_ruangan='$b' where id_ruangan='".$_POST['id_ruangan']."'");
	if ($simpan) {
	header('location:e_ruangan.php');
	} else {
	echo "<script>alert('Gagal Di Update');</script>";
	}
	} else {
   echo "<script>alert('Input Masih ada yang Kosong'));</script>";
	}
	//}
	?>