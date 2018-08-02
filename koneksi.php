<?php
$hostname = "localhost";
$user_db = 'root';
$pass_db = ''; 

$database = "kampus";


$kon = mysqli_connect($hostname, $user_db, $pass_db, $database);
if (! $kon) { echo "gagal komeksi!!!"; }

?>