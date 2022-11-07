<?php

//cara membuat function 
function ngoding(){

}

//function bisa di katagorikan menggunakan public,protected, private
class vscode{
    public function coding_php(){

    }
}

//mecoba buat fungsi sama temen
function sapa_temen(){
    echo "<h1>Hai gais<h1>"
    echo "<h3> ketemu lagi sama guweh<h3>"
}
//mencoba membuat fungsi yang ada prameter
function temen($teman_guweh){
    echo "<h2>heyyyy disini guweh sama ($teman_guweh)<h2>"
    echo "<h2>umur dia segini (umur)<h2>";
}
//cara panggil fungsi
//tuliskan nama fungsi
sapa_temen();

//jika fungsi menggunakan parameter, harus di tulis saat pemanggilannya 
teman("Rizki ,20")

//mencoba membuat fungsi 
function kasir($nama, $jumlah){
    echo "<h3>Hai ($nama), Terima Kasih Telah Berkunjung!! <h3>";
    echo "<h3>dan jangan lupa kembali lagi!! <h3>";
    
    //membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
    if ($jumlah>10){
        echo "<h3>Gokilll, Kamu Dapat Mobil Karena Telah Berkunjung<h3>";

    }
}

?>