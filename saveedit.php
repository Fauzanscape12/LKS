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

$id = $_POST['id'];
$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];
$level = $_POST['level'];
$team = $_POST['team'];
$score = $_POST['score'];

if (empty($_SESSION['username'])) {
	echo '<script language="javascript">';
	echo 'alert("LOGIN DULU YANG TRUE BRO")';
	echo '</script>';
	echo '<meta http-equiv="Refresh" content="0; URL=index.php">';
	break;
}
elseif (!isset($_SESSION['username'])) {
	echo '<script language="javascript">';
	echo 'alert("LOGIN DULU YANG TRUE BRO")';
	echo '</script>';
	echo '<meta http-equiv="Refresh" content="0; URL=index.php">';
	break;
}

else{
	$db->updatenew($id,$username,$name,$password,$level,$team,$score);
}