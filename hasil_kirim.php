 <?php
      include "koneksi.php"; 
	  $conn = mysqli_connect('localhost', 'root', '', 'kampus');
	  if (isset($_POST['submit'])){
      $a = $_POST['nama'];
      $b = $_POST['deskripsi'];
     	 $simpan = mysqli_query($conn,"Insert Into chat (nama,pesan)values('$a','$b')");
		if($simpan){
	 header('location:obrolan.php');
	 } else {
	 echo "<script>alert('Gagal Di simpan');</script>";
	}
	 }
?>