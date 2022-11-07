<?php ;

// cara untuk mengakses class dan object 
class mobil{
    //property
    var $merk;
    var $roda;
    var $kecepatan;

    //membut fungsi / operasi berjalan (maju dan mundur)
    function jalan_maju(){
        return "vroommmm majuu";
    }
    function jalan_mundur(){
        return "vroooommm ciiit mundur";
    }
}

// instansi (menginstankan variable yang menghubungkan dari class keluar class)
//mobil_keren itu object 
$mobil_keren = new mobil();

// set property
$mobil_keren->merk ="ferrar";
$mobil_keren->roda ="hitam";
$mobil_keren->kecepatan ="300kmH";

//tampilkan propertinya 
echo $mobil_keren->merk;
echo "<br />";
echo $mobil_keren->roda;
echo "<br />";
echo $mobil_keren->kecepatan;

//tampilkan funcion 
echo $mobil_keren->jalan_maju();
echo "<br />";
echo $mobil_keren->jalan_mundur();