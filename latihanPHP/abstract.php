<?php 

abstract class Produk{
    private $judul,
            $penulis,
            $penerbit,
            $harga;
    protected $diskon;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0)
    {   
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception("Judul harus string!");
        }
        $this->judul = $judul;
    }

    public function getPenulis(){
        return $this->penulis;
    }   

    public function setPenulis($penulis){
        if(!is_string($penulis)){
            throw new Exception("Judul harus string!");
        }
        $this->penulis = $penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setPenerbit($penerbit){
        if(!is_string($penerbit)){
            throw new Exception("Judul harus string!");
        }
        $this->penerbit = $penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoLengkap();

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        // if($this->tipe == "komik"){
        //     $str .= "-{$this->jmlHalaman} halaman."; 
        // }else if($this->tipe == "game"){
        //     $str .= "-{$this->waktuMain} jam.";
        // }
        return $str;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class cetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK";
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoLengkap()}<br>";
        }
        return $str;
    }

}

class Komik extends Produk{
    public $jmlHalaman;
    
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoLengkap()
    {
        $str = "Komik: " . $this->getInfo() . "- {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$waktuMain=0,$diskon=0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga,$diskon);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoLengkap()
    {
        $str = "Game: " . $this->getInfo() . "- {$this->waktuMain} jam.";
        return $str;
    }
}

$produk1 = new Komik("Naruto","Masashi Kishimoto11","Shonen Jump",30000,100);
$produk2 = new Game("Uncharted","Neil Druckmann","Sony Computer",250000,50);
// $cetakInfoKomik = new Komik;
// $cetakInfoGame = new Game;

$cetakProduk = new cetakInfoProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();



