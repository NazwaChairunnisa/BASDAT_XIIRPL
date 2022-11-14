<?php

// Prosedural adalah program yang tidak perlu adanya instansiasi, cukup menggunakan fungsi

// Contoh Dari Prosedural 
echo date('d-m=y');//fungsi tanpa ada objek

// Contoh Dari Pendekatan Objek 
$date = new DateTime();//objek
echo $date->format('d-m-y');




?>