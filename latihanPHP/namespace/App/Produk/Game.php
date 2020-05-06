<?php 
class Game extends Produk implements InfoProduk{
    public $waktuMain;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$waktuMain=0,$diskon=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga,$diskon);
        $this->waktuMain = $waktuMain;
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
        $str = "Game: " . $this->getInfo() . "- {$this->waktuMain} jam.";
        return $str;
    }
}