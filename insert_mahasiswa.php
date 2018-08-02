 <?php
      include "koneksi.php"; 
	  $conn = mysqli_connect('localhost', 'root', '', 'kampus');
	  if (isset($_POST['submit'])){
      $a = $_POST['nim_mhs'];
      $b = $_POST['nama_mhs'];
     	 $simpan = mysqli_query($conn,"Insert Into mahasiswa (nim_mhs,nama)values('$a','$b')");
		if($simpan){
	 header('location:smahasiswa.php');
	 } else {
	 echo "<script>alert('Gagal Di simpan');</script>";
	}
	 }
?>