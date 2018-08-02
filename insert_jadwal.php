 <?php
      include "koneksi.php"; 
	  $conn = mysqli_connect('localhost', 'root', '', 'kampus');
	  if (isset($_POST['submit'])){
	  $a = $_POST['id_jadwal'];
      $b= $_POST['id_matkul'];
      $c = $_POST['id_ruang'];
	  $d = $_POST['hari'];
	  $e = $_POST['jam'];
	  $f = $_POST['status'];
     	 $simpan = mysqli_query($conn,"Insert Into jadwal (id_jadwal,id_matkul,id_ruangan,hari,jam,status)values('$a','$b','$c','$d','$e','$f')");
		if($simpan){
	 header('location:sjadwal.php');
	 } else {
	 echo "<script>alert('Gagal Di simpan');</script>";
	}
	 }
?>