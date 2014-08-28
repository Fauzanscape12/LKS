<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
	//redirect ke halaman login
	include 'template/header.php';
}
else {
	include 'template/header-login.php';
}