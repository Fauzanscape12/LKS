<?php
include 'class.php';
// include 'coba.php';
//$kendaraan1 = new kendaraan('YAMAHA MIO',10000000);
//$kereta1 = new ka('KA LOKOMOTIF',20000000);
//$kereta1->setgerbong(20);
//echo 'Jumlah gerbong dari '.$kereta1->bacamerek().' yang seharga '.$kereta1->bacaharga().' adalah '.$kereta1->bacagerbong();

//echo 'Harga dari ' .$kendaraan1->jmlroda.' adalah Rp '.$kendaraan1->bacaharga();

// parameter koneksi mysql
$host = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'ant';

$db = new connect($host,$user,$pass,$mydb);
$db->connect();

//$db->addbuku('Coba','Aku','AKu dwe','2014');
// proses hapus data
if (isset($_GET['op']))
{
if ($_GET['op'] == 'edit')
{
// baca ID dari parameter ID buku yang akan dihap

$id = $_GET['id'];

// proses hapus data buku berdasarkan ID via meth

$db->update($id,'Wek','Wek','asdf','2222');
}
}
// tampilkan semua data buku
$db->tampil(); 
?>