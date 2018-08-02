 <?php
      include "koneksi.php"; 
	  $conn = mysqli_connect('localhost', 'root', '', 'kampus');
	  if (isset($_POST['submit'])){
      $a = $_POST['id_matkul'];
      $b = $_POST['NAMA_MATKUL'];
	  $c = $_POST['sks_matkul'];
	  $d=  $_POST['semester'];
     	 $simpan = mysqli_query($conn,"Insert Into matkul (id_matkul,nama_matkul,sks,semester)values('$a','$b','$c','$d')");
		if($simpan){
	 header('location:smatkuliah.php');
	 } else {
	 echo "<script>alert('Gagal Di simpan');</script>";
	}
	 }
?>