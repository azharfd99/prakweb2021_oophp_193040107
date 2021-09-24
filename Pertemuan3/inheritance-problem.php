<?php

/*
Azhar Fiqri Dwiyana
193040107
https://github.com/Azharfd99/prakweb2021_oophp_193040107
Pertemuan3  24 september 2021
Mengerjakan tugas dari video 1
*/

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        // komik : JoJo no Kimyō na Bōken | Hirohiko Araki, Shōnen Jump (Rp. 37000) - 100 halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Komik" ) {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if( $this->tipe == "Game" ) {
            $str .= " ~ {$this->waktuMain} jam.";
        }

        return $str;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("JoJo no Kimyō na Bōken", "Hirohiko Araki", "Shōnen Jump", 37000, 100, 0, "Komik");
$produk2 = new Produk("Genshin Impact", "Hugh Tsai", "miHoYo", 20000, 0, 300, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();