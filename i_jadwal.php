 <?php
session_start();
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
// not logged in, move to login page
header('Location: index.php');
exit;
} else { 

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
			    <li><a href="insert.php" class="active"><span>Insert</span></a></li>
			    <li><a href="edit.php"><span>Edit</span></a></li>
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
						<h2>Insert Jadwal</h2>
					</div>
					<!-- End Box Head -->
					<br><br>
					<form name='Insert' method = 'post' action='insert_jadwal.php' onSUBMIT='return formValidator()'>
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<table border="0">
							<tr>
										<td width="200px"><p align="left"><label>ID Jadwal : </label></p></td>
										<td><input name="id_jadwal" id="nim_mhs" type="text"class="field size1" ></td>
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>ID Mata Kuliah: </label></p></td>
										<?php
										$query = "SELECT * FROM matkul";
										$result= mysqli_query($conn, "SELECT * FROM matkul");
										?>
										<td>
										<select name="id_matkul" id="id_dosen"type="text"  class="field size1"  required="required">
											 <option value="">-Matakuliah-</option>
											 <?php while ($data = mysqli_fetch_array($result)) 
													{ ?>
											 <option value='<?php echo $data['id_matkul'] ?>'><?php echo $data['id_matkul'] ?> | <?php echo $data['nama_matkul'] ?></option>
											 <?php } ?>
										  </select>
										</td>										
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>ID Ruangan: </label></p></td>
										<?php
										$query = "SELECT * FROM ruangan";
										$result= mysqli_query($conn, "SELECT * FROM ruangan");
										?>
										<td>
										<select name="id_ruang" id="id_dosen"type="text"  class="field size1"  required="required">
											 <option value="">-Ruangan-</option>
											 <?php while ($data = mysqli_fetch_array($result)) 
													{ ?>
											 <option value='<?php echo $data['id_ruangan'] ?>'><?php echo $data['id_ruangan'] ?> | <?php echo $data['nama_ruangan'] ?></option>
											 <?php } ?>
										  </select>
										</td>										
									
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>HARI : </label></p></td>
										<td>
										<select name="hari" id="hari" type="text"  class="field size1"required="required">
											 <option value="">-Hari-</option>
											 <option value="Senin">Senin</option>
											 <option value="Selasa">Selasa</option>
											 <option value="Rabu">Rabu</option>
											 <option value="Kamis">Kamis</option>
											 <option value="Jumat">Jumat</option>
										</select>
										</td>	
							</tr>
							<tr>
										<td width="200px"><p align="left"><label>JAM : </label></p></td>
										<td>
										<select name="jam" id="jam" type="text"  class="field size1" required="required">
											 <option value="">-Jam-</option>
											 <option value="07:50-09:30">07:50-09:30</option>
											 <option value="09:50-11:30">09:50-11:30</option>
											 <option value="12:50-14:30">12:50-14:30</option>
											 <option value="14:50-16:30">14:50-16:30</option>
											 <option value="16:50-18:30">16:50-18:30</option>
										</select>
										</td>										
							</tr>
							<tr>
							<td width="200px"><p align="left"><label>STATUS : </label></p></td>
							<td>
								  <select id="status" name="status" class="field size1" required="required">
									 <option value="">-Status Matkul-</option>
									 <option value="Teori">Wajib</option>
									 <option value="Praktek">Pilihan</option>
								  </select>
							<td>
										
										
									
							</tr>
						
							</table>
							</center>
						</div>
						<!-- End Form -->
						
						<!-- Form Buttons -->
						<br><br><br>
						<div class="buttons">
							<input type="submit" name='submit' class="button" value="INSERT" />
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
						
						<p><a href="i_dosen.php">Data Dosen</a></p>
						<p><a href="i_mahasiswa.php">Data Mahasiswa</a></p>
						<p><a href="i_matakuliah.php">Mata Kuliah</a></p>
						<p><a href="i_ruangan.php">Ruangan</a></p>
						<p><a href="i_nilai.php">Data Nilai</a></p>
						<p><a href="i_mengajar.php">Data Mengajar</a></p>
						<p><a href="i_jadwal.php">Jadwal</a></p><p><a href="i_admin.php">Admin</a></p></p>
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
	?>
</body>
</html>