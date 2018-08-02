<?php
//koneksi ke MySQL
include "koneksi.php";
$conn = mysqli_connect('localhost', 'root', '', 'kampus');
 $a = $_POST['id_dosen'];
$b = $_POST['nama_dosen'];
//masukkan datanya ke database
$input = mysqli_query($conn,"INSERT INTO dosen(id_dosen,nama) VALUES('$a','$b')");

if($input){
    header("location: sdosen.php");
}else{
    echo "gagal";
}
?>