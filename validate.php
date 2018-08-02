<?php
session_start();
//$user =$_POST['txt_user'];
//$password =$_POST['txt_pass'];

$conn = mysqli_connect('localhost', 'root', '', 'kampus');
	
	//require_once("connection.php");
	$user = $_POST['txt_user'];
	$password = $_POST['txt_pass'];
	$cek = mysqli_query($conn,"SELECT * FROM admin WHERE user = '$user' && pass='$password'");
	$hasil = mysqli_fetch_array($cek);
	if (($_SESSION['user'] = $hasil['user']) && ($_SESSION['pass']= $hasil['pass']))
	{ $_SESSION['logged-in'] = true;
	header('location:admin_homepage.php');
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