<?php

session_start();
session_destroy();
if (isset($_SESSION['logged-in'])) {

unset($_SESSION['logged-in']);
}
header('Location: index.php');
?>