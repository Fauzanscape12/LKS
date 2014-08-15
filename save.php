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

$db->add($name,$user,$pass,$email,$hero,$level);