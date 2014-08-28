<?php
include 'class.php';
//koneksi mysql
$host = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'ant';

$db = new connect($host,$user,$pass,$mydb);
$db->connect();

?>