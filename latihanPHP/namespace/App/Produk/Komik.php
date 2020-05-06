<?php
class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;
    
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        // if($this->tipe == "komik"){
        //     $str .= "-{$this->jmlHalaman} halaman."; 
        // }else if($this->tipe == "game"){
        //     $str .= "-{$this->waktuMain} jam.";
        // }
        return $str;
    }

    public function getInfoLengkap()
    {
        $str = "Komik: " . $this->getInfo() . "- {$this->jmlHalaman} halaman.";
        return $str;
    }
}