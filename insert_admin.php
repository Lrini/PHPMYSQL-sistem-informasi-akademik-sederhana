 <?php
      include "koneksi.php"; 
	  $conn = mysqli_connect('localhost', 'root', '', 'kampus');
	  $a = $_POST['user'];
      $b= $_POST['password'];
     // $c = $_POST['id_dosen'];
     	 $simpan = mysqli_query($conn,"Insert Into admin (user,pass)values('$a','$b')");
		if($simpan){
	 header('location:sadmin.php');
	 } else {
	 echo "<script>alert('Gagal Di simpan');</script>";
	}
?>