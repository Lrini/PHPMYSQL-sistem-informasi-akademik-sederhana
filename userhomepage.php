<?php
session_start();
include "koneksi.php";
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] != true) {
// not logged in, move to login page
header('Location: index1.php');
exit;
} else { 

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
				<div class="news">
				
						<br>
						<h2><center><b>ILMU KOMPUTER</b><center></h2><br>
						<p>  UNIVERSITAS NUSA CENDANA FAKULTAS SAINS DAN TEKNIK JURUSAN ILMU KOMPUTER: <p><br>

							<p>Visi <br>Program Studi Ilmu Komputer adalah “Menjadikan program studi yang terkemuka pada tahun 2013 di KUPANG, 
								dalam pengembangan ilmu pengetahuan dan teknologi komputer yang berkualitas dan sesuai dengan kebutuhan masyarakat”.</p><br>
							<p>Misi <br>Melaksanakan Tri Dharma Perguruan Tinggi dalam bidang ilmu dan teknologi komputer untuk menjawab tantangan abad era informasi berkas.
								Memasyarakatkan ilmu komputer dalam mewujudkan kecerdasan bangsa dan mengembangkan kelembagaan dengan manajemen modern yang berorientasi pada kualitas, profesionalisme dan keterbukaan.</p><br>
							<p>Tujuan<br>Tujuan Program Studi Ilmu Komputer adalah “Menghasilkan lulusan bidang Teknologi informasi berkas yang memiliki keahlian, berkeinginan dan berkemampuan untuk mengembangkan diri secara mandiri, tanggap dan dapat menyesuaikan diri dengan perkembangan keilmuan dan kebutuhan masyarakat”.</p>
				
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
						<p><a href="obrolan.php? ">Obrolan</a></p>
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