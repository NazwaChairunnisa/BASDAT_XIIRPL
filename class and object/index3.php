<?php
//class smkjp1

class smkjp1{
    //property
    var $guru;
    var $murid;

    //function berdiri
    function berdiri(){
        return "berdiri dengan tegap";
    }

    funcion berlari(){
        return "berlari 1000 langkah";
    }
}
//instanstasi
$sekolah =new smk jp1();

//eksperiman mengakses

//isi property 
$sekolah->guru = "Pak Saipul";
$sekolah->murid = "Ahmad K";

//tampilkan
echo $sekolah->guru,"",$sekolah->berdiri();
echo "<br />";
echo $sekolah->murid,"",$sekolah->berlari();
echo "<br />"

//tampilkan dari object $smkjpone


