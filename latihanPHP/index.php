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

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// $produk1->penulis = "Shonen Jump";
// $produk1->penerbit = "Masashi Kishimoto";
// $produk1->harga = 30000;

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->penulis = "Neil Druckman";
// $produk2->penerbit = "Sony Computer";
// $produk2->harga = 255000;

// echo "komik: " . $produk1->getLabel();
// echo "<br>";
// echo "game: " . $produk2->getLabel();

$produk3 = new Produk("Naruto","Masashi Kishimoto11","Shonen Jump",30000);
echo $produk3->getLabel();


