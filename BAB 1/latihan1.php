<?php

class Buku {
    public $judul,
        $pengarang,
        $penerbit,
        $tahun_terbit,
        $cetakan;

    public function __construct($judul = "Judul Buku", $pengarang = "Pengarang", $Penerbit = "Penerbit", $tahun_terbit = "Tahun Terbit", $cetakan = "Cetakan") {
        $this->judul = $jdul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun_terbit = $tahun_terbit;
        $this->cetakan = $cetakan;
    }
}
class CetakInfoBuku {
    public function infoBuku( Buku $info ) {
        $str = "Judul : {$info->jdul} <br> Pengarang : {$info->pengarang} <br> Penerbit : {$info->penerbit} <br> Tahun Terbit : {$info->tahun_terbit} <br> Cetakan : {$info->cetakan}";
        return $str;
    }
}