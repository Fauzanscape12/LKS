<?php
include 'class.php';
include 'cek-login.php';
//koneksi mysql
$host = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'ant';

$db = new connect($host,$user,$pass,$mydb);
$db->connect();

if (!empty($_SESSION['username'])) {
	include 'template/main.php';
	include 'template/footer.php';
}
elseif (isset($_SESSION['username'])) {
	include 'template/main.php';
	include 'template/footer.php';
}

else{
	include 'template/main.php';
	include 'template/footer.php';
}