<?php
session_start();
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true){
header('Location: index.php');
exit;
} else {

$data2= $_GET['id_matkul'];

$hasil = mysqli_query($conn,"select * from matkul where id_matkul ='$data2'");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="admin_homepage.php"><img src = "css/images/h.png"></a></h1>
			<div id="top-navigation">
				<strong>
				<?php
				echo "Welcome, ".$_SESSION['user']."";?>
				</strong><span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="admin_homepage.php"><span>Home</span></a></li>
			    <li><a href="insert.php"><span>Insert</span></a></li>
			    <li><a href="edit.php"  class="active"><span>Edit</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
				<div class="box-head">
						<h2>Update Mata Kuliah</h2>
					</div>
					<!-- End Box Head -->
					<br><br>
					<form name='SUBMIT' method = 'post' action='UpdateTabelMataKuliah.php'>
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<?php
								while ($data = mysqli_fetch_array($hasil)) {
							?>
							<tr>
										<td width="200px"><p align="left"><label>ID MATA KULIAH : </label></p></td>
										<td><input name="id_matkul" type="text" disabled='disable' value="<?php echo $data['id_matkul']?>" class="field size1" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>NAMA MATA KULIAH : </label></p></td>
										<td><input name="nama_matkul" type="text" value="<?php echo $data['nama_matkul']?>" class="field size1" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>SKS : </label></p></td>
										<td><input name="sks" type="text" value="<?php echo $data['sks']?>" class="field size1" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>SEMESTER : </label></p></td>
										<td><input name="semester" type="text" value="<?php echo $data['semester']?>" class="field size1" ></td>
									
							</tr>
							</table>
							</center>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<br><br><br>
						<div class="buttons">
							<input type="hidden" name="id_matkul" value="<?php echo $data['id_matkul']; ?>">
							<input type="SUBMIT" name="SUBMIT" value="UPDATE">
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Tabel</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						
						<p><a href="e_dosen.php">Data Dosen</a></p>
						<p><a href="e_mahasiswa.php">Data Mahasiswa</a></p>
						<p><a href="e_matakuliah.php">Mata Kuliah</a></p>
						<p><a href="e_ruangan.php">Ruangan</a></p>
						<p><a href="e_nilai.php">Data Nilai</a></p>
						<p><a href="e_mengajar.php">Data Mengajar</a></p>
						<p><a href="e_jadwal.php">Jadwal</a></p><p><a href="e_admin.php">Admin</a></p>
						<p><a href="#"></a></p>
						
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">@copyright 2013- Immanuel Rini</span>
		<span class="right">
			Design by Core I 7</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	<?php
	}
	}
	?>
</body>
</html>