<?php

$warnaterang = ['kuning','hijau','pink'];
$warnagelap = ['hitam','abu-abu','coklat'];

//Gabungkan 2 array menjadi 1
$warna_warna = array_merge($warnaterang, $warnagelap);

//array_marge bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['Magenta', 'Cyan','Hijau Kelabu']
);

// Unpacking untuk mengekstrak array menggunakan ...
$list_buah_lokal = ['Mangga','Rambutan'];
$liat_buah = ['Kurma','anggur',$list_buah_lokal,'kismis'];

// kurma, anggur, mangga, rambutan, kismis

// Explode array berfungsi memecah belah string lalu diubah kedalam array

// Explode ada 2 paragraf parameter : Delimeter(pemisah), string sasaran (sasaran yang akan kita pecah menjadi array)

$siswa = "andi budi dono kasino indro";
var_dump(explode(" ", $siswa));

//  Impload fungsi kebalikannya expload
//  Impload dia 2 parameter : glue (penggabung), array sasaran (sasaran yang akan kita gabung menjadi string)

$siswa_pintar = ['Refa','Agus','Novan'];//array
$siswa_jago = implode (' ', $siswa_pintar);//string 