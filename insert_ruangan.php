 <?php
      include "koneksi.php"; 
	  $conn = mysqli_connect('localhost', 'root', '', 'kampus');
	  if (isset($_POST['submit'])){
      $a = $_POST['id_ruangan'];
      $b = $_POST['nama_ruangan'];
     	 $simpan = mysqli_query($conn,"Insert Into ruangan (id_ruangan,nama_ruangan)values('$a','$b')");
		if($simpan){
	 header('location:sruangan.php');
	 } else {
	 echo "<script>alert('Gagal Di simpan');</script>";
	}
	 }
?>