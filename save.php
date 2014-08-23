<?php

include 'class.php';
//koneksi mysql
$host = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'ant';

$db = new connect($host,$user,$pass,$mydb);
$db->connect();


$name = $_POST['name'];
$user = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$hero = $_POST['hero'];
$level = $_POST['level'];
if ($name == null || $user == null || $pass == null || $email == null || $hero == null || $level == null) {
	echo '<script language="javascript">';
	echo 'alert("TIDAK ADA YANG BOLEH EMPTY")';
	echo '</script>';
	echo '<meta http-equiv="Refresh" content="0; URL=index.php">';
}
else {
	
$db->add($name,$user,$pass,$email,$hero,$level);
}