<?php
session_start();
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] != true) {
// not logged in, move to login page
header('Location: index1.php');
exit;
} else { 
 $result = mysqli_query($conn,"SELECT * FROM upload ORDER BY id_upload DESC");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>BERANDA</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="user_homepage.php"><img src = "css/images/h.png"></a></h1>
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
			     <li><a href="admin_homepage.php" class="active"><span>Home</span></a></li>
			    <li><a href="insert.php"><span>Insert</span></a></li>
			    <li><a href="edit.php"><span>Edit</span></a></li>
			    <li><a href ="informasi.php"><span>Informsi</span></a></li>
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
						<h2>informasi berkas </h2>
					</div>
					<!-- End Box Head -->
					<br><br>
					<form enctype="multipart/form-data" method="POST" action="hasil_upload1.php">
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<tr>
										File yang di upload :
										<input type="file" id="fupload" name="fupload"><br>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>Pesan : </label></p></td>
										<td><textarea name="deskripsi" rows="8" cols="40"></textarea></td>
							</tr>
							</table>
							</center>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<br><br><br>
						<div class="buttons">
							<input type="submit" class="button" value="Upload" />
						</div>
						<!-- End Form Buttons -->
						<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" align='center'>
							<tr align='center'>
								<td width="200px"> <b> Nama file </b> </td>
								<td width="200px"> <b> Deskripsi </b> </td>
							</tr>
							<?php
							while ($data = mysqli_fetch_array($result)) 
							{
							echo "
								<tr align='center'>
								<td>".$data['nama_file']."</td>
								<td>".$data['deskripsi']."</td>
								<td> <i> <a href=\"simpan.php?file=$data[nama_file]\"'>Download </a> </i></td>
								</tr>";
							}
							?>
						</table>
						
					</div>
					<!-- Table -->
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
						
						
						<p><a href="sdosen.php">Data Dosen</a></p>
						<p><a href="smahasiswa.php">Data Mahasiswa</a></p>
						<p><a href="smatakuliah.php">Mata Kuliah</a></p>
						<p><a href="sruangan.php">Ruangan</a></p>
						<p><a href="snilai.php">Data Nilai</a></p>
						<p><a href="smengajar.php">Data Mengajar</a></p>
						<p><a href="sjadwal.php">Jadwal</a></p>
						<p><a href="sadmin.php">Admin</a></p>
						
						
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
		<span class="left">@copyright 2013 - Immanuel Rini</span>
		<span class="right">
			Design by CORE I 7</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	<?php
	}
	?>
</body>
</html>