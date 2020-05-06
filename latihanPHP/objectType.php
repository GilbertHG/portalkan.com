<?php 

class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0)
    {   
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
        
    }
}

class cetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

$produk3 = new Produk("Naruto","Masashi Kishimoto11","Shonen Jump",30000);
$infoProduk = new cetakInfoProduk;
echo $infoProduk->cetak($produk3);