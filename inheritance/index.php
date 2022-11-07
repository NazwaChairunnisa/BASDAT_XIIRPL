<?php
//pewarisan atau inheritance

// class induk 
class komputer {
    // property
    public $merk;
    public $prosesor;
    public $memory;

    //fungsi/operasi membuat beli komputer
    public function beli_komputer(){
        return "Beli Komputer baru";
    }
}

//kelas turunan / extends dari class komputer ke class laptop
class laptop extends komputer{
    public function lihat_spek(){
        //ambil property dari class komputer
        return "merk: $this->merk,prosesor;
        $this->prosesor, memory: $this->memory";
    }
}
//intansiasi
//mmebuat objek baru dari class laptop (kelas turunan)
$laptop_baru = new laptop();

//isi propertynya
$laptop_baru->merk = "asus"
$laptop_baru->prosesor = "AMD Ryzen 9X";
$laptop_baru->memory = "1 petaByte";

//panggil funcionnya
echo $laptop_baru