<?php

/*
Azhar Fiqri Dwiyana
193040107
https://github.com/Azharfd99/prakweb2021_oophp_193040107
Pertemuan3  24 september 2021
Membuat file baru yaitu constant.php dan mencoba menggunakan metode constant
*/


/*define('NAMA', 'Azhar Fiqri Dwiyana');
echo NAMA;

echo "<br>";

const UMUR = 20;
echo UMUR;*/

/*class Coba {
    const NAMA = 'Azhar';
}

echo Coba::NAMA;*/



//echo __FILE__;

/*function coba() {
    return __FUNCTION__;
}

echo coba();*/

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;



?>