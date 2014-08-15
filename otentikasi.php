<?php
include('class.php');
$host = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'ant';

$db = new connect($host,$user,$pass,$mydb);
$db->connect();

session_start();

//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	echo '<script language="javascript">';
	echo 'alert("USERNAME & PASSWORD EMPTY")';
	echo '</script>';
	echo '<meta http-equiv="Refresh" content="0; URL=index.php">';
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	echo '<script language="javascript">';
	echo 'alert("USERNAME IS EMPTY")';
	echo '</script>';
	echo '<meta http-equiv="Refresh" content="0; URL=index.php">';
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	echo '<script language="javascript">';
	echo 'alert("PASSWORD IS EMPTY")';
	echo '</script>';
	echo '<meta http-equiv="Refresh" content="0; URL=index.php">';
	break;
}

$q = mysql_query("select * from student where username='$username' and password='$password'");

if (mysql_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['username'] = $username;
	
	//redirect ke halaman index
	header('location:index.php');
	include 'template/header-login.php';
} else {
	//kalau username ataupun password tidak terdaftar di database
	echo '<script language="javascript">';
	echo 'alert("USERNAME OR PASSWORD NOT FOUND")';
	echo '</script>';
	echo '<meta http-equiv="Refresh" content="0; URL=index.php">';
}
?>