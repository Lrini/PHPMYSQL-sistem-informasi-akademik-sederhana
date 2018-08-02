 <?php
      include "koneksi.php"; 
	  $conn = mysqli_connect('localhost', 'root', '', 'kampus');
	  if (isset($_POST['submit'])){
      $a = $_POST['nim'];
      $b = $_POST['id_matkul'];
	  $c = $_POST['nilai'];
     	 $simpan = mysqli_query($conn,"Insert Into nilai (nim,id_matkul,nilai)values('$a','$b','$c')");
		if($simpan){
	 header('location:snilai.php');
	 } else {
	 echo "<script>alert('Gagal Di simpan');</script>";
	}
	 }
?>