<?php

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1 = new Produk(); 
//$produk1->judul = 'JoJo no Kimyō na Bōken';
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2->judul = 'Genshin Impact';
//$produk2->tambahProperty = 'hahaha';
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "JoJo no Kimyō na Bōken";
$produk3->penulis = "Hirohiko Araki";
$produk3->penerbit = "Shōnen Jump";
$produk3->harga = 37000;

//echo "Komik : $produk3->penulis, $produk3->penerbit";
//echo "<br>";
//echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "Gensin Impact";
$produk4->penulis = "Hugh Tsai";
$produk4->penerbit = "miHoYo";
$produk4->harga = 20000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();