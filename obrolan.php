<?php
session_start();
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] != true) {
// not logged in, move to login page
header('Location: index1.php');
exit;
} else { 
 $result = mysqli_query($conn,"SELECT * FROM chat");
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
			    <li><a href="user_homepage.php" class="active"><span>Beranda</span></a></li>
			    <li><a href="dosen.php"><span>Dosen</span></a></li>
			    <li><a href="jadwal.php"><span>Jadwal</span></a></li>
				<li><a href="mata_kuliah.php"><span>Mata Kuliah</span></a></li>
				<li><a href="nilai.php"><span>Nilai</span></a></li>
				<li><a href="ruangan.php"><span>Ruangan</span></a></li>
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
						<h2>obrolan </h2>
					</div>
					<!-- End Box Head -->
					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" align='center'>
							<tr align='center'>
								<td width="200px"> <b> Nama</b> </td>
								<td width="200px"> <b> Pesan </b> </td>
							</tr>
							<?php
							while ($data = mysqli_fetch_array($result)) 
							{
							echo "
								<tr align='center'>
								<td>".$data['nama']."</td>
								<td>".$data['pesan']."</td>
								
								</tr>";
							}
							?>
						</table>
						
					</div>
					<!-- Table -->
					<br><br>
					<form name = "inser" enctype="multipart/form-data" method="POST" action="hasil_kirim.php" onSUBMIT='return formValidator()'>
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<tr>
										<td width="200px"><p align="left"><label>Nama : </label></p></td>
										<td><input type="text"  id="nama" name="nama" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>Pesan  : </label></p></td>
										<td><textarea name="deskripsi" rows="8" cols="40"></textarea></td>
							</tr>
							</table>
							</center>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<br><br><br>
						<div class="buttons">
							<input type="hidden" name="id_jadwal" value="<?php echo "".$_SESSION['user'] ?>">
							<input type="submit" name = "submit" class="button" value="Kirim" />
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
						<h2>Ilmu Komputer</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						
						
						<p><a href="informasi.php">informasi berkas</a></p>
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