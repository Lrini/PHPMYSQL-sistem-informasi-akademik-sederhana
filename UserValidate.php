<?php
session_start();
//$user =$_POST['txt_user'];
//$password =$_POST['txt_pass'];

$conn = mysqli_connect('localhost', 'root', '', 'kampus');
	
	//require_once("connection.php");
	$user = $_POST['NIM'];
	$password = $_POST['PASSWORD'];
	$cek = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE nim_mhs = '$password' && nama='$user'");
	$hasil = mysqli_fetch_array($cek);
	if (($_SESSION['user'] = $hasil['nama']) && ($_SESSION['password']= $hasil['nim_mhs']))
	{ $_SESSION['logged-in'] = true;
	header('location:userhomepage.php');
	}
	else { ?>
		<script language="JavaScript">alert('user & Password Salah');
		document.location='index.php'</script> 
		
		<?php }
		
		
/* 
if (empty($user)) {
//header ('location: index.php');
} else {
$sqlsin="SELECT * FROM admin WHERE user='$user' and pass='$password'";
$result=mysqli_query($sqlsin);

//if($data=mysql_fetch_array($result))
if(mysqli_num_rows($result)==1) 
	{
	echo $result['user'];
		$_SESSION['logged-in'] = true;
		$_SESSION['user'] = $_POST['txt_user'];
	//	header('Location: admin_homepage.php');
	}
else
	{
		$_SESSION['salah']='salah';
	//	header ('Location: index.php');
	}
	
	} */
?>