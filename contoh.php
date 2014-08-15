<?php

include 'coba.php';
$kendaraan1 = new kendaraan('YAMAHA MIO',10000000);
$kereta1 = new ka('KA LOKOMOTIF',20000000);
$kereta1->setgerbong(20);
echo 'Jumlah gerbong dari '.$kereta1->bacamerek().' yang seharga '.$kereta1->bacaharga().' adalah '.$kereta1->bacagerbong();

echo 'Harga dari ' .$kendaraan1->jmlroda.' adalah Rp '.$kendaraan1->bacaharga();