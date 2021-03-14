<?php 

class Buku {
    private $judul, 
           $penulis,
           $penerbit,
           $harga,
           $halaman,
           $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->prosesor, $this->penerbit";
    }

    public function getInfoBuku() {
        $str = "Judul : {$this->judul} <br> Penulis : {$this->penulis} <br> Penerbit : {$this->penerbit} <br> Harga : Rp ".number_format($this->getHarga(), 0, ",", ".")." <br> Halaman : {$this->halaman}";
        return $str;
    }

}

$Buku1 = new Buku("Jago Ngoding", "Andika Galih", "Jaya Indo", 98900, 20);
$Buku1->setDiskon(5);
echo $Buku1->getInfoBuku();
?>