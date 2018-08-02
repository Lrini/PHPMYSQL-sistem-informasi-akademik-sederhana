 <?php
      include "koneksi.php"; 
	  $conn = mysqli_connect('localhost', 'root', '', 'kampus');
	  if (isset($_POST['submit'])){
	  $a = $_POST['id_mengajar'];
      $b= $_POST['id_matkul'];
      $c = $_POST['id_dosen'];
     	 $simpan = mysqli_query($conn,"Insert Into mengajar (id_mengajar,id_dosen,id_matkul)values('$a','$c','$b')");
		if($simpan){
	 header('location:smengajar.php');
	 } else {
	 echo "<script>alert('Gagal Di simpan');</script>";
	}
	 }
?>